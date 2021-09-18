<?php

include("lib/openal.php");

use OpenAL as AL;
use OpenALC as ALC;

function Init() : bool
{
	$device = ALC::OpenDevice( null );

	if ( is_null( $device ) ) 
	{
		echo "ERR : alcOpenDevice() failed.".PHP_EOL;
		return false;
	}

	$context = ALC::CreateContext( $device , null );

	if ( is_null( $context ) )
	{
		echo "ERR : alcCreateContext() failed.".PHP_EOL;
		return false;
	}

	if ( 0 == ALC::MakeContextCurrent( $context ) )
	{
		echo "ERR : alcMakeContextCurrent() failed.".PHP_EOL;
		return false;
	}
	
	return true;
}

function Quit() 
{
	$context = ALC::GetCurrentContext();
	$device  = ALC::GetContextsDevice( $context );

	ALC::MakeContextCurrent( null );

	ALC::DestroyContext( $context );

	ALC::CloseDevice( $device );
}

function CreateSoundWave( float $freq , float $duration = 0.250 , float $volume = 0.5 ) : object|null
{
	$samples = (int)( 48_000 * $duration );
	$buffer = FFI::new("short[$samples]");

	for( $s = 0 ; $s <$samples ; $s++ )
	{
		$buffer[ $s ] = $volume * 0x7fFF * ( sin( $freq * $s * 2.0 * M_PI / (float)48_000 ) ); // > 0 ? 1.0 : -1.0 ) ;
	}


	$format = AL::FORMAT_MONO16;

	$sound = AL::$ffi->new('ALuint[1]');

	AL::GenBuffers( 1 , $sound );

	AL::BufferData( $sound[0] , $format , $buffer , $samples * 2 , 48_000 );

	if ( AL::GetError() != AL::NO_ERROR )
	{
		echo "Err : CreateSoundWave() error #".AL::GetError().PHP_EOL;
		return null;
	}

	return $sound;
}

function CreateSourceFor( object $sound ) : object|null
{
	$source = AL::$ffi->new('ALuint[1]');

	AL::GenSources( 1 , $source );

	AL::Sourcei( $source[0] , AL::BUFFER , $sound[0] );

	return $source;
}

echo "Init ALC device and context ...".PHP_EOL;
Init();

echo "Creating 500Hz sinus sound wave ...".PHP_EOL;
$sound = CreateSoundWave( 500, 3, 1.0 );

echo "Playing sound ...".PHP_EOL;

$source = CreateSourceFor( $sound );

AL::SourcePlay( $source[0] );

echo "Sleeping ...".PHP_EOL;
sleep(5);

echo "Cleaning ...".PHP_EOL;

AL::Sourcei( $source[0] , AL::BUFFER , 0 );
AL::DeleteSources( 1 , $source );

AL::DeleteBuffers( 1 , $sound );


echo "Quitting ...".PHP_EOL;
Quit();

echo "The end !".PHP_EOL;




// EOF
