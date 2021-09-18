<?php

OpenAL::OpenAL(); // autoinit

/***
		`OpenAL::$ffi` contains all the `al` and `alc` prefixed API.

		`OpenAL::__callStatic` calls the `al` API without the prefixe.
		`OpenALC::__callStatic` calls the `alc` API without the prefixe.

*/


class OpenAL
{
	// --- al.h

	const SOURCE_RELATIVE                      = 0x0202 ;

	const CONE_INNER_ANGLE                     = 0x1001 ;
	const CONE_OUTER_ANGLE                     = 0x1002 ;
	const PITCH                                = 0x1003 ;
	const POSITION                             = 0x1004 ;
	const DIRECTION                            = 0x1005 ;
	const VELOCITY                             = 0x1006 ;
	const LOOPING                              = 0x1007 ;
	const BUFFER                               = 0x1009 ;
	const GAIN                                 = 0x100A ;
	const MIN_GAIN                             = 0x100D ;
	const MAX_GAIN                             = 0x100E ;
	const ORIENTATION                          = 0x100F ;
	const SOURCE_STATE                         = 0x1010 ;
	const INITIAL                              = 0x1011 ;
	const PLAYING                              = 0x1012 ;
	const PAUSED                               = 0x1013 ;
	const STOPPED                              = 0x1014 ;
	const BUFFERS_QUEUED                       = 0x1015 ;
	const BUFFERS_PROCESSED                    = 0x1016 ;
	const REFERENCE_DISTANCE                   = 0x1020 ;
	const ROLLOFF_FACTOR                       = 0x1021 ;
	const CONE_OUTER_GAIN                      = 0x1022 ;
	const MAX_DISTANCE                         = 0x1023 ;
	const SEC_OFFSET                           = 0x1024 ;
	const SAMPLE_OFFSET                        = 0x1025 ;
	const BYTE_OFFSET                          = 0x1026 ;
	const SOURCE_TYPE                          = 0x1027 ;
	const STATIC                               = 0x1028 ;
	const STREAMING                            = 0x1029 ;
	const UNDETERMINED                         = 0x1030 ;
	const FORMAT_MONO8                         = 0x1100 ;
	const FORMAT_MONO16                        = 0x1101 ;
	const FORMAT_STEREO8                       = 0x1102 ;
	const FORMAT_STEREO16                      = 0x1103 ;
	
	const FREQUENCY                            = 0x2001 ;
	const BITS                                 = 0x2002 ;
	const CHANNELS                             = 0x2003 ;
	const SIZE                                 = 0x2004 ;
	const UNUSED                               = 0x2010 ;
	const PENDING                              = 0x2011 ;
	const PROCESSED                            = 0x2012 ;

	const NO_ERROR                             = 0 ;

	const INVALID_NAME                         = 0xA001 ;
	const INVALID_ENUM                         = 0xA002 ;
	const INVALID_VALUE                        = 0xA003 ;
	const INVALID_OPERATION                    = 0xA004 ;
	const OUT_OF_MEMORY                        = 0xA005 ;

	const VENDOR                               = 0xB001 ;
	const VERSION                              = 0xB002 ;
	const RENDERER                             = 0xB003 ;
	const EXTENSIONS                           = 0xB004 ;

	const DOPPLER_FACTOR                       = 0xC000 ;
	const DOPPLER_VELOCITY                     = 0xC001 ;
	const SPEED_OF_SOUND                       = 0xC003 ;

	const DISTANCE_MODEL                       = 0xD000 ;
	const INVERSE_DISTANCE                     = 0xD001 ;
	const INVERSE_DISTANCE_CLAMPED             = 0xD002 ;
	const LINEAR_DISTANCE                      = 0xD003 ;
	const LINEAR_DISTANCE_CLAMPED              = 0xD004 ;
	const EXPONENT_DISTANCE                    = 0xD005 ;
	const EXPONENT_DISTANCE_CLAMPED            = 0xD006 ;

	// --- alext.h

	const FORMAT_IMA_ADPCM_MONO16_EXT         = 0x10000 ;
	const FORMAT_IMA_ADPCM_STEREO16_EXT       = 0x10001 ;

	const FORMAT_WAVE_EXT                     = 0x10002 ;

	const FORMAT_VORBIS_EXT                   = 0x10003 ;

	const FORMAT_QUAD8_LOKI                   = 0x10004 ;
	const FORMAT_QUAD16_LOKI                  = 0x10005 ;

	const FORMAT_MONO_FLOAT32                 = 0x10010 ;
	const FORMAT_STEREO_FLOAT32               = 0x10011 ;

	const FORMAT_MONO_DOUBLE_EXT              = 0x10012 ;
	const FORMAT_STEREO_DOUBLE_EXT            = 0x10013 ;

	const FORMAT_MONO_MULAW_EXT               = 0x10014 ;
	const FORMAT_STEREO_MULAW_EXT             = 0x10015 ;

	const FORMAT_MONO_ALAW_EXT                = 0x10016 ;
	const FORMAT_STEREO_ALAW_EXT              = 0x10017 ;

	const FORMAT_QUAD8                        = 0x1204 ;
	const FORMAT_QUAD16                       = 0x1205 ;
	const FORMAT_QUAD32                       = 0x1206 ;
	const FORMAT_REAR8                        = 0x1207 ;
	const FORMAT_REAR16                       = 0x1208 ;
	const FORMAT_REAR32                       = 0x1209 ;
	const FORMAT_51CHN8                       = 0x120A ;
	const FORMAT_51CHN16                      = 0x120B ;
	const FORMAT_51CHN32                      = 0x120C ;
	const FORMAT_61CHN8                       = 0x120D ;
	const FORMAT_61CHN16                      = 0x120E ;
	const FORMAT_61CHN32                      = 0x120F ;
	const FORMAT_71CHN8                       = 0x1210 ;
	const FORMAT_71CHN16                      = 0x1211 ;
	const FORMAT_71CHN32                      = 0x1212 ;

	const FORMAT_MONO_MULAW                   = 0x10014 ;
	const FORMAT_STEREO_MULAW                 = 0x10015 ;
	const FORMAT_QUAD_MULAW                   = 0x10021 ;
	const FORMAT_REAR_MULAW                   = 0x10022 ;
	const FORMAT_51CHN_MULAW                  = 0x10023 ;
	const FORMAT_61CHN_MULAW                  = 0x10024 ;
	const FORMAT_71CHN_MULAW                  = 0x10025 ;

	const FORMAT_MONO_IMA4                    = 0x1300 ;
	const FORMAT_STEREO_IMA4                  = 0x1301 ;

	const SOURCE_DISTANCE_MODEL               = 0x200 ;

	const BYTE_RW_OFFSETS_SOFT                = 0x1031 ;
	const SAMPLE_RW_OFFSETS_SOFT              = 0x1032 ;

	const LOOP_POINTS_SOFT                    = 0x2015 ;

	const FOLDBACK_EVENT_BLOCK                = 0x4112 ;
	const FOLDBACK_EVENT_START                = 0x4111 ;
	const FOLDBACK_EVENT_STOP                 = 0x4113 ;
	const FOLDBACK_MODE_MONO                  = 0x4101 ;
	const FOLDBACK_MODE_STEREO                = 0x4102 ;

	const DEDICATED_GAIN                      = 0x0001 ;
	const EFFECT_DEDICATED_DIALOGUE           = 0x9001 ;
	const EFFECT_DEDICATED_LOW_FREQUENCY_EFFECT = 0x9000 ;

	const MONO_SOFT                           = 0x1500 ;
	const STEREO_SOFT                         = 0x1501 ;
	const REAR_SOFT                           = 0x1502 ;
	const QUAD_SOFT                           = 0x1503 ;
	const _5POINT1_SOFT                        = 0x1504 ;
	const _6POINT1_SOFT                        = 0x1505 ;
	const _7POINT1_SOFT                        = 0x1506 ;

	const BYTE_SOFT                           = 0x1400 ;
	const UNSIGNED_BYTE_SOFT                  = 0x1401 ;
	const SHORT_SOFT                          = 0x1402 ;
	const UNSIGNED_SHORT_SOFT                 = 0x1403 ;
	const INT_SOFT                            = 0x1404 ;
	const UNSIGNED_INT_SOFT                   = 0x1405 ;
	const FLOAT_SOFT                          = 0x1406 ;
	const DOUBLE_SOFT                         = 0x1407 ;
	const BYTE3_SOFT                          = 0x1408 ;
	const UNSIGNED_BYTE3_SOFT                 = 0x1409 ;

	const MONO8_SOFT                          = 0x1100 ;
	const MONO16_SOFT                         = 0x1101 ;
	const MONO32F_SOFT                        = 0x10010 ;
	const STEREO8_SOFT                        = 0x1102 ;
	const STEREO16_SOFT                       = 0x1103 ;
	const STEREO32F_SOFT                      = 0x10011 ;
	const QUAD8_SOFT                          = 0x1204 ;
	const QUAD16_SOFT                         = 0x1205 ;
	const QUAD32F_SOFT                        = 0x1206 ;
	const REAR8_SOFT                          = 0x1207 ;
	const REAR16_SOFT                         = 0x1208 ;
	const REAR32F_SOFT                        = 0x1209 ;
	const _5POINT1_8_SOFT                      = 0x120A ;
	const _5POINT1_16_SOFT                     = 0x120B ;
	const _5POINT1_32F_SOFT                    = 0x120C ;
	const _6POINT1_8_SOFT                      = 0x120D ;
	const _6POINT1_16_SOFT                     = 0x120E ;
	const _6POINT1_32F_SOFT                    = 0x120F ;
	const _7POINT1_8_SOFT                      = 0x1210 ;
	const _7POINT1_16_SOFT                     = 0x1211 ;
	const _7POINT1_32F_SOFT                    = 0x1212 ;

	const INTERNAL_FORMAT_SOFT                = 0x2008 ;
	const BYTE_LENGTH_SOFT                    = 0x2009 ;
	const SAMPLE_LENGTH_SOFT                  = 0x200A ;
	const SEC_LENGTH_SOFT                     = 0x200B ;

	const DIRECT_CHANNELS_SOFT                = 0x1033 ;

	const STEREO_ANGLES                       = 0x1030 ;

	const SOURCE_RADIUS                       = 0x1031 ;

	const SAMPLE_OFFSET_LATENCY_SOFT          = 0x1200 ;
	const SEC_OFFSET_LATENCY_SOFT             = 0x1201 ;

	const DEFERRED_UPDATES_SOFT               = 0xC002 ;

	const UNPACK_BLOCK_ALIGNMENT_SOFT         = 0x200C ;
	const PACK_BLOCK_ALIGNMENT_SOFT           = 0x200D ;

	const FORMAT_MONO_MSADPCM_SOFT            = 0x1302 ;
	const FORMAT_STEREO_MSADPCM_SOFT          = 0x1303 ;

/*	const BYTE_LENGTH_SOFT                    = 0x2009 ; */
/*	const SAMPLE_LENGTH_SOFT                  = 0x200A ; */
/*	const SEC_LENGTH_SOFT                     = 0x200B ; */

	const FORMAT_BFORMAT2D_8                  = 0x20021 ;
	const FORMAT_BFORMAT2D_16                 = 0x20022 ;
	const FORMAT_BFORMAT2D_FLOAT32            = 0x20023 ;
	const FORMAT_BFORMAT3D_8                  = 0x20031 ;
	const FORMAT_BFORMAT3D_16                 = 0x20032 ;
	const FORMAT_BFORMAT3D_FLOAT32            = 0x20033 ;

	const FORMAT_BFORMAT2D_MULAW              = 0x10031 ;
	const FORMAT_BFORMAT3D_MULAW              = 0x10032 ;

	const GAIN_LIMIT_SOFT                     = 0x200E ;

	const NUM_RESAMPLERS_SOFT                 = 0x1210 ;
	const DEFAULT_RESAMPLER_SOFT              = 0x1211 ;
	const SOURCE_RESAMPLER_SOFT               = 0x1212 ;
	const RESAMPLER_NAME_SOFT                 = 0x1213 ;

	const SOURCE_SPATIALIZE_SOFT              = 0x1214 ;
	const AUTO_SOFT                           = 0x0002 ;

	const SAMPLE_OFFSET_CLOCK_SOFT            = 0x1202 ;
	const SEC_OFFSET_CLOCK_SOFT               = 0x1203 ;

	const DROP_UNMATCHED_SOFT                 = 0x0001 ;
	const REMIX_UNMATCHED_SOFT                = 0x0002 ;

	const AMBISONIC_LAYOUT_SOFT               = 0x1997 ;
	const AMBISONIC_SCALING_SOFT              = 0x1998 ;


	const FUMA_SOFT                           = 0x0000 ;
	const ACN_SOFT                            = 0x0001 ;

	const SN3D_SOFT                           = 0x0001 ;
	const N3D_SOFT                            = 0x0002 ;

	const EFFECTSLOT_TARGET_SOFT              = 0x199C ;

	const EVENT_CALLBACK_FUNCTION_SOFT        = 0x19A2 ;
	const EVENT_CALLBACK_USER_PARAM_SOFT      = 0x19A3 ;
	const EVENT_TYPE_BUFFER_COMPLETED_SOFT    = 0x19A4 ;
	const EVENT_TYPE_SOURCE_STATE_CHANGED_SOFT= 0x19A5 ;
	const EVENT_TYPE_DISCONNECTED_SOFT        = 0x19A6 ;

	// --- AL/efx.h 
 
	const METERS_PER_UNIT                      = 0x20004 ;

	const DIRECT_FILTER                        = 0x20005 ;
	const AUXILIARY_SEND_FILTER                = 0x20006 ;
	const AIR_ABSORPTION_FACTOR                = 0x20007 ;
	const ROOM_ROLLOFF_FACTOR                  = 0x20008 ;
	const CONE_OUTER_GAINHF                    = 0x20009 ;
	const DIRECT_FILTER_GAINHF_AUTO            = 0x2000A ;
	const AUXILIARY_SEND_FILTER_GAIN_AUTO      = 0x2000B ;
	const AUXILIARY_SEND_FILTER_GAINHF_AUTO    = 0x2000C ;

	const REVERB_DENSITY                       = 0x0001 ;
	const REVERB_DIFFUSION                     = 0x0002 ;
	const REVERB_GAIN                          = 0x0003 ;
	const REVERB_GAINHF                        = 0x0004 ;
	const REVERB_DECAY_TIME                    = 0x0005 ;
	const REVERB_DECAY_HFRATIO                 = 0x0006 ;
	const REVERB_REFLECTIONS_GAIN              = 0x0007 ;
	const REVERB_REFLECTIONS_DELAY             = 0x0008 ;
	const REVERB_LATE_REVERB_GAIN              = 0x0009 ;
	const REVERB_LATE_REVERB_DELAY             = 0x000A ;
	const REVERB_AIR_ABSORPTION_GAINHF         = 0x000B ;
	const REVERB_ROOM_ROLLOFF_FACTOR           = 0x000C ;
	const REVERB_DECAY_HFLIMIT                 = 0x000D ;

	const EAXREVERB_DENSITY                    = 0x0001 ;
	const EAXREVERB_DIFFUSION                  = 0x0002 ;
	const EAXREVERB_GAIN                       = 0x0003 ;
	const EAXREVERB_GAINHF                     = 0x0004 ;
	const EAXREVERB_GAINLF                     = 0x0005 ;
	const EAXREVERB_DECAY_TIME                 = 0x0006 ;
	const EAXREVERB_DECAY_HFRATIO              = 0x0007 ;
	const EAXREVERB_DECAY_LFRATIO              = 0x0008 ;
	const EAXREVERB_REFLECTIONS_GAIN           = 0x0009 ;
	const EAXREVERB_REFLECTIONS_DELAY          = 0x000A ;
	const EAXREVERB_REFLECTIONS_PAN            = 0x000B ;
	const EAXREVERB_LATE_REVERB_GAIN           = 0x000C ;
	const EAXREVERB_LATE_REVERB_DELAY          = 0x000D ;
	const EAXREVERB_LATE_REVERB_PAN            = 0x000E ;
	const EAXREVERB_ECHO_TIME                  = 0x000F ;
	const EAXREVERB_ECHO_DEPTH                 = 0x0010 ;
	const EAXREVERB_MODULATION_TIME            = 0x0011 ;
	const EAXREVERB_MODULATION_DEPTH           = 0x0012 ;
	const EAXREVERB_AIR_ABSORPTION_GAINHF      = 0x0013 ;
	const EAXREVERB_HFREFERENCE                = 0x0014 ;
	const EAXREVERB_LFREFERENCE                = 0x0015 ;
	const EAXREVERB_ROOM_ROLLOFF_FACTOR        = 0x0016 ;
	const EAXREVERB_DECAY_HFLIMIT              = 0x0017 ;

	const CHORUS_WAVEFORM                      = 0x0001 ;
	const CHORUS_PHASE                         = 0x0002 ;
	const CHORUS_RATE                          = 0x0003 ;
	const CHORUS_DEPTH                         = 0x0004 ;
	const CHORUS_FEEDBACK                      = 0x0005 ;
	const CHORUS_DELAY                         = 0x0006 ;

	const DISTORTION_EDGE                      = 0x0001 ;
	const DISTORTION_GAIN                      = 0x0002 ;
	const DISTORTION_LOWPASS_CUTOFF            = 0x0003 ;
	const DISTORTION_EQCENTER                  = 0x0004 ;
	const DISTORTION_EQBANDWIDTH               = 0x0005 ;

	const ECHO_DELAY                           = 0x0001 ;
	const ECHO_LRDELAY                         = 0x0002 ;
	const ECHO_DAMPING                         = 0x0003 ;
	const ECHO_FEEDBACK                        = 0x0004 ;
	const ECHO_SPREAD                          = 0x0005 ;

	const FLANGER_WAVEFORM                     = 0x0001 ;
	const FLANGER_PHASE                        = 0x0002 ;
	const FLANGER_RATE                         = 0x0003 ;
	const FLANGER_DEPTH                        = 0x0004 ;
	const FLANGER_FEEDBACK                     = 0x0005 ;
	const FLANGER_DELAY                        = 0x0006 ;

	const FREQUENCY_SHIFTER_FREQUENCY          = 0x0001 ;
	const FREQUENCY_SHIFTER_LEFT_DIRECTION     = 0x0002 ;
	const FREQUENCY_SHIFTER_RIGHT_DIRECTION    = 0x0003 ;

	const VOCAL_MORPHER_PHONEMEA               = 0x0001 ;
	const VOCAL_MORPHER_PHONEMEA_COARSE_TUNING = 0x0002 ;
	const VOCAL_MORPHER_PHONEMEB               = 0x0003 ;
	const VOCAL_MORPHER_PHONEMEB_COARSE_TUNING = 0x0004 ;
	const VOCAL_MORPHER_WAVEFORM               = 0x0005 ;
	const VOCAL_MORPHER_RATE                   = 0x0006 ;

	const PITCH_SHIFTER_COARSE_TUNE            = 0x0001 ;
	const PITCH_SHIFTER_FINE_TUNE              = 0x0002 ;

	const RING_MODULATOR_FREQUENCY             = 0x0001 ;
	const RING_MODULATOR_HIGHPASS_CUTOFF       = 0x0002 ;
	const RING_MODULATOR_WAVEFORM              = 0x0003 ;

	const AUTOWAH_ATTACK_TIME                  = 0x0001 ;
	const AUTOWAH_RELEASE_TIME                 = 0x0002 ;
	const AUTOWAH_RESONANCE                    = 0x0003 ;
	const AUTOWAH_PEAK_GAIN                    = 0x0004 ;

	const COMPRESSOR_ONOFF                     = 0x0001 ;

	const EQUALIZER_LOW_GAIN                   = 0x0001 ;
	const EQUALIZER_LOW_CUTOFF                 = 0x0002 ;
	const EQUALIZER_MID1_GAIN                  = 0x0003 ;
	const EQUALIZER_MID1_CENTER                = 0x0004 ;
	const EQUALIZER_MID1_WIDTH                 = 0x0005 ;
	const EQUALIZER_MID2_GAIN                  = 0x0006 ;
	const EQUALIZER_MID2_CENTER                = 0x0007 ;
	const EQUALIZER_MID2_WIDTH                 = 0x0008 ;
	const EQUALIZER_HIGH_GAIN                  = 0x0009 ;
	const EQUALIZER_HIGH_CUTOFF                = 0x000A ;

	const EFFECT_FIRST_PARAMETER               = 0x0000 ;
	const EFFECT_LAST_PARAMETER                = 0x8000 ;
	const EFFECT_TYPE                          = 0x8001 ;

	const EFFECT_NULL                          = 0x0000 ;
	const EFFECT_REVERB                        = 0x0001 ;
	const EFFECT_CHORUS                        = 0x0002 ;
	const EFFECT_DISTORTION                    = 0x0003 ;
	const EFFECT_ECHO                          = 0x0004 ;
	const EFFECT_FLANGER                       = 0x0005 ;
	const EFFECT_FREQUENCY_SHIFTER             = 0x0006 ;
	const EFFECT_VOCAL_MORPHER                 = 0x0007 ;
	const EFFECT_PITCH_SHIFTER                 = 0x0008 ;
	const EFFECT_RING_MODULATOR                = 0x0009 ;
	const EFFECT_AUTOWAH                       = 0x000A ;
	const EFFECT_COMPRESSOR                    = 0x000B ;
	const EFFECT_EQUALIZER                     = 0x000C ;
	const EFFECT_EAXREVERB                     = 0x8000 ;

	const EFFECTSLOT_EFFECT                    = 0x0001 ;
	const EFFECTSLOT_GAIN                      = 0x0002 ;
	const EFFECTSLOT_AUXILIARY_SEND_AUTO       = 0x0003 ;

	const EFFECTSLOT_NULL                      = 0x0000 ;

	const LOWPASS_GAIN                         = 0x0001 ;
	const LOWPASS_GAINHF                       = 0x0002 ;

	const HIGHPASS_GAIN                        = 0x0001 ;
	const HIGHPASS_GAINLF                      = 0x0002 ;

	const BANDPASS_GAIN                        = 0x0001 ;
	const BANDPASS_GAINLF                      = 0x0002 ;
	const BANDPASS_GAINHF                      = 0x0003 ;

	const FILTER_FIRST_PARAMETER               = 0x0000 ;
	const FILTER_LAST_PARAMETER                = 0x8000 ;
	const FILTER_TYPE                          = 0x8001 ;

	const FILTER_NULL                          = 0x0000 ;
	const FILTER_LOWPASS                       = 0x0001 ;
	const FILTER_HIGHPASS                      = 0x0002 ;
	const FILTER_BANDPASS                      = 0x0003 ;

	const LOWPASS_MIN_GAIN                     = (0.0) ;
	const LOWPASS_MAX_GAIN                     = (1.0) ;
	const LOWPASS_DEFAULT_GAIN                 = (1.0) ;

	const LOWPASS_MIN_GAINHF                   = (0.0) ;
	const LOWPASS_MAX_GAINHF                   = (1.0) ;
	const LOWPASS_DEFAULT_GAINHF               = (1.0) ;

	const HIGHPASS_MIN_GAIN                    = (0.0) ;
	const HIGHPASS_MAX_GAIN                    = (1.0) ;
	const HIGHPASS_DEFAULT_GAIN                = (1.0) ;

	const HIGHPASS_MIN_GAINLF                  = (0.0) ;
	const HIGHPASS_MAX_GAINLF                  = (1.0) ;
	const HIGHPASS_DEFAULT_GAINLF              = (1.0) ;

	const BANDPASS_MIN_GAIN                    = (0.0) ;
	const BANDPASS_MAX_GAIN                    = (1.0) ;
	const BANDPASS_DEFAULT_GAIN                = (1.0) ;

	const BANDPASS_MIN_GAINHF                  = (0.0) ;
	const BANDPASS_MAX_GAINHF                  = (1.0) ;
	const BANDPASS_DEFAULT_GAINHF              = (1.0) ;

	const BANDPASS_MIN_GAINLF                  = (0.0) ;
	const BANDPASS_MAX_GAINLF                  = (1.0) ;
	const BANDPASS_DEFAULT_GAINLF              = (1.0) ;

	const REVERB_MIN_DENSITY                   = (0.0) ;
	const REVERB_MAX_DENSITY                   = (1.0) ;
	const REVERB_DEFAULT_DENSITY               = (1.0) ;

	const REVERB_MIN_DIFFUSION                 = (0.0) ;
	const REVERB_MAX_DIFFUSION                 = (1.0) ;
	const REVERB_DEFAULT_DIFFUSION             = (1.0) ;

	const REVERB_MIN_GAIN                      = (0.0) ;
	const REVERB_MAX_GAIN                      = (1.0) ;
	const REVERB_DEFAULT_GAIN                  = (0.32) ;

	const REVERB_MIN_GAINHF                    = (0.0) ;
	const REVERB_MAX_GAINHF                    = (1.0) ;
	const REVERB_DEFAULT_GAINHF                = (0.89) ;

	const REVERB_MIN_DECAY_TIME                = (0.1) ;
	const REVERB_MAX_DECAY_TIME                = (20.0) ;
	const REVERB_DEFAULT_DECAY_TIME            = (1.49) ;

	const REVERB_MIN_DECAY_HFRATIO             = (0.1) ;
	const REVERB_MAX_DECAY_HFRATIO             = (2.0) ;
	const REVERB_DEFAULT_DECAY_HFRATIO         = (0.83) ;

	const REVERB_MIN_REFLECTIONS_GAIN          = (0.0) ;
	const REVERB_MAX_REFLECTIONS_GAIN          = (3.16) ;
	const REVERB_DEFAULT_REFLECTIONS_GAIN      = (0.05) ;

	const REVERB_MIN_REFLECTIONS_DELAY         = (0.0) ;
	const REVERB_MAX_REFLECTIONS_DELAY         = (0.3) ;
	const REVERB_DEFAULT_REFLECTIONS_DELAY     = (0.007) ;

	const REVERB_MIN_LATE_REVERB_GAIN          = (0.0) ;
	const REVERB_MAX_LATE_REVERB_GAIN          = (10.0) ;
	const REVERB_DEFAULT_LATE_REVERB_GAIN      = (1.26) ;

	const REVERB_MIN_LATE_REVERB_DELAY         = (0.0) ;
	const REVERB_MAX_LATE_REVERB_DELAY         = (0.1) ;
	const REVERB_DEFAULT_LATE_REVERB_DELAY     = (0.011) ;

	const REVERB_MIN_AIR_ABSORPTION_GAINHF     = (0.892) ;
	const REVERB_MAX_AIR_ABSORPTION_GAINHF     = (1.0) ;
	const REVERB_DEFAULT_AIR_ABSORPTION_GAINHF = (0.994) ;

	const REVERB_MIN_ROOM_ROLLOFF_FACTOR       = (0.0) ;
	const REVERB_MAX_ROOM_ROLLOFF_FACTOR       = (10.0) ;
	const REVERB_DEFAULT_ROOM_ROLLOFF_FACTOR   = (0.0) ;

	const REVERB_MIN_DECAY_HFLIMIT              = 0 ;
	const REVERB_MAX_DECAY_HFLIMIT              = 1 ;
	const REVERB_DEFAULT_DECAY_HFLIMIT          = 1 ;

	const EAXREVERB_MIN_DENSITY                = (0.0) ;
	const EAXREVERB_MAX_DENSITY                = (1.0) ;
	const EAXREVERB_DEFAULT_DENSITY            = (1.0) ;

	const EAXREVERB_MIN_DIFFUSION              = (0.0) ;
	const EAXREVERB_MAX_DIFFUSION              = (1.0) ;
	const EAXREVERB_DEFAULT_DIFFUSION          = (1.0) ;

	const EAXREVERB_MIN_GAIN                   = (0.0) ;
	const EAXREVERB_MAX_GAIN                   = (1.0) ;
	const EAXREVERB_DEFAULT_GAIN               = (0.32) ;

	const EAXREVERB_MIN_GAINHF                 = (0.0) ;
	const EAXREVERB_MAX_GAINHF                 = (1.0) ;
	const EAXREVERB_DEFAULT_GAINHF             = (0.89) ;

	const EAXREVERB_MIN_GAINLF                 = (0.0) ;
	const EAXREVERB_MAX_GAINLF                 = (1.0) ;
	const EAXREVERB_DEFAULT_GAINLF             = (1.0) ;

	const EAXREVERB_MIN_DECAY_TIME             = (0.1) ;
	const EAXREVERB_MAX_DECAY_TIME             = (20.0) ;
	const EAXREVERB_DEFAULT_DECAY_TIME         = (1.49) ;

	const EAXREVERB_MIN_DECAY_HFRATIO          = (0.1) ;
	const EAXREVERB_MAX_DECAY_HFRATIO          = (2.0) ;
	const EAXREVERB_DEFAULT_DECAY_HFRATIO      = (0.83) ;

	const EAXREVERB_MIN_DECAY_LFRATIO          = (0.1) ;
	const EAXREVERB_MAX_DECAY_LFRATIO          = (2.0) ;
	const EAXREVERB_DEFAULT_DECAY_LFRATIO      = (1.0) ;

	const EAXREVERB_MIN_REFLECTIONS_GAIN       = (0.0) ;
	const EAXREVERB_MAX_REFLECTIONS_GAIN       = (3.16) ;
	const EAXREVERB_DEFAULT_REFLECTIONS_GAIN   = (0.05) ;

	const EAXREVERB_MIN_REFLECTIONS_DELAY      = (0.0) ;
	const EAXREVERB_MAX_REFLECTIONS_DELAY      = (0.3) ;
	const EAXREVERB_DEFAULT_REFLECTIONS_DELAY  = (0.007) ;

	const EAXREVERB_DEFAULT_REFLECTIONS_PAN_XYZ= (0.0) ;

	const EAXREVERB_MIN_LATE_REVERB_GAIN       = (0.0) ;
	const EAXREVERB_MAX_LATE_REVERB_GAIN       = (10.0) ;
	const EAXREVERB_DEFAULT_LATE_REVERB_GAIN   = (1.26) ;

	const EAXREVERB_MIN_LATE_REVERB_DELAY      = (0.0) ;
	const EAXREVERB_MAX_LATE_REVERB_DELAY      = (0.1) ;
	const EAXREVERB_DEFAULT_LATE_REVERB_DELAY  = (0.011) ;

	const EAXREVERB_DEFAULT_LATE_REVERB_PAN_XYZ= (0.0) ;

	const EAXREVERB_MIN_ECHO_TIME              = (0.075) ;
	const EAXREVERB_MAX_ECHO_TIME              = (0.25) ;
	const EAXREVERB_DEFAULT_ECHO_TIME          = (0.25) ;

	const EAXREVERB_MIN_ECHO_DEPTH             = (0.0) ;
	const EAXREVERB_MAX_ECHO_DEPTH             = (1.0) ;
	const EAXREVERB_DEFAULT_ECHO_DEPTH         = (0.0) ;

	const EAXREVERB_MIN_MODULATION_TIME        = (0.04) ;
	const EAXREVERB_MAX_MODULATION_TIME        = (4.0) ;
	const EAXREVERB_DEFAULT_MODULATION_TIME    = (0.25) ;

	const EAXREVERB_MIN_MODULATION_DEPTH       = (0.0) ;
	const EAXREVERB_MAX_MODULATION_DEPTH       = (1.0) ;
	const EAXREVERB_DEFAULT_MODULATION_DEPTH   = (0.0) ;

	const EAXREVERB_MIN_AIR_ABSORPTION_GAINHF  = (0.892) ;
	const EAXREVERB_MAX_AIR_ABSORPTION_GAINHF  = (1.0) ;
	const EAXREVERB_DEFAULT_AIR_ABSORPTION_GAINHF= (0.994) ;

	const EAXREVERB_MIN_HFREFERENCE            = (1000.0) ;
	const EAXREVERB_MAX_HFREFERENCE            = (20000.0) ;
	const EAXREVERB_DEFAULT_HFREFERENCE        = (5000.0) ;

	const EAXREVERB_MIN_LFREFERENCE            = (20.0) ;
	const EAXREVERB_MAX_LFREFERENCE            = (1000.0) ;
	const EAXREVERB_DEFAULT_LFREFERENCE        = (250.0) ;

	const EAXREVERB_MIN_ROOM_ROLLOFF_FACTOR    = (0.0) ;
	const EAXREVERB_MAX_ROOM_ROLLOFF_FACTOR    = (10.0) ;
	const EAXREVERB_DEFAULT_ROOM_ROLLOFF_FACTOR= (0.0) ;

	const EAXREVERB_MIN_DECAY_HFLIMIT           = 0 ;
	const EAXREVERB_MAX_DECAY_HFLIMIT           = 1 ;
	const EAXREVERB_DEFAULT_DECAY_HFLIMIT       = 1 ;

	const CHORUS_WAVEFORM_SINUSOID             = (0) ;
	const CHORUS_WAVEFORM_TRIANGLE             = (1) ;

	const CHORUS_MIN_WAVEFORM                  = (0) ;
	const CHORUS_MAX_WAVEFORM                  = (1) ;
	const CHORUS_DEFAULT_WAVEFORM              = (1) ;

	const CHORUS_MIN_PHASE                     = (-180) ;
	const CHORUS_MAX_PHASE                     = (180) ;
	const CHORUS_DEFAULT_PHASE                 = (90) ;

	const CHORUS_MIN_RATE                      = (0.0) ;
	const CHORUS_MAX_RATE                      = (10.0) ;
	const CHORUS_DEFAULT_RATE                  = (1.1) ;

	const CHORUS_MIN_DEPTH                     = (0.0) ;
	const CHORUS_MAX_DEPTH                     = (1.0) ;
	const CHORUS_DEFAULT_DEPTH                 = (0.1) ;

	const CHORUS_MIN_FEEDBACK                  = (-1.0) ;
	const CHORUS_MAX_FEEDBACK                  = (1.0) ;
	const CHORUS_DEFAULT_FEEDBACK              = (0.25) ;

	const CHORUS_MIN_DELAY                     = (0.0) ;
	const CHORUS_MAX_DELAY                     = (0.016) ;
	const CHORUS_DEFAULT_DELAY                 = (0.016) ;

	const DISTORTION_MIN_EDGE                  = (0.0) ;
	const DISTORTION_MAX_EDGE                  = (1.0) ;
	const DISTORTION_DEFAULT_EDGE              = (0.2) ;

	const DISTORTION_MIN_GAIN                  = (0.01) ;
	const DISTORTION_MAX_GAIN                  = (1.0) ;
	const DISTORTION_DEFAULT_GAIN              = (0.05) ;

	const DISTORTION_MIN_LOWPASS_CUTOFF        = (80.0) ;
	const DISTORTION_MAX_LOWPASS_CUTOFF        = (24000.0) ;
	const DISTORTION_DEFAULT_LOWPASS_CUTOFF    = (8000.0) ;

	const DISTORTION_MIN_EQCENTER              = (80.0) ;
	const DISTORTION_MAX_EQCENTER              = (24000.0) ;
	const DISTORTION_DEFAULT_EQCENTER          = (3600.0) ;

	const DISTORTION_MIN_EQBANDWIDTH           = (80.0) ;
	const DISTORTION_MAX_EQBANDWIDTH           = (24000.0) ;
	const DISTORTION_DEFAULT_EQBANDWIDTH       = (3600.0) ;

	const ECHO_MIN_DELAY                       = (0.0) ;
	const ECHO_MAX_DELAY                       = (0.207) ;
	const ECHO_DEFAULT_DELAY                   = (0.1) ;

	const ECHO_MIN_LRDELAY                     = (0.0) ;
	const ECHO_MAX_LRDELAY                     = (0.404) ;
	const ECHO_DEFAULT_LRDELAY                 = (0.1) ;

	const ECHO_MIN_DAMPING                     = (0.0) ;
	const ECHO_MAX_DAMPING                     = (0.99) ;
	const ECHO_DEFAULT_DAMPING                 = (0.5) ;

	const ECHO_MIN_FEEDBACK                    = (0.0) ;
	const ECHO_MAX_FEEDBACK                    = (1.0) ;
	const ECHO_DEFAULT_FEEDBACK                = (0.5) ;

	const ECHO_MIN_SPREAD                      = (-1.0) ;
	const ECHO_MAX_SPREAD                      = (1.0) ;
	const ECHO_DEFAULT_SPREAD                  = (-1.0) ;

	const FLANGER_WAVEFORM_SINUSOID            = (0) ;
	const FLANGER_WAVEFORM_TRIANGLE            = (1) ;

	const FLANGER_MIN_WAVEFORM                 = (0) ;
	const FLANGER_MAX_WAVEFORM                 = (1) ;
	const FLANGER_DEFAULT_WAVEFORM             = (1) ;

	const FLANGER_MIN_PHASE                    = (-180) ;
	const FLANGER_MAX_PHASE                    = (180) ;
	const FLANGER_DEFAULT_PHASE                = (0) ;

	const FLANGER_MIN_RATE                     = (0.0) ;
	const FLANGER_MAX_RATE                     = (10.0) ;
	const FLANGER_DEFAULT_RATE                 = (0.27) ;

	const FLANGER_MIN_DEPTH                    = (0.0) ;
	const FLANGER_MAX_DEPTH                    = (1.0) ;
	const FLANGER_DEFAULT_DEPTH                = (1.0) ;

	const FLANGER_MIN_FEEDBACK                 = (-1.0) ;
	const FLANGER_MAX_FEEDBACK                 = (1.0) ;
	const FLANGER_DEFAULT_FEEDBACK             = (-0.5) ;

	const FLANGER_MIN_DELAY                    = (0.0) ;
	const FLANGER_MAX_DELAY                    = (0.004) ;
	const FLANGER_DEFAULT_DELAY                = (0.002) ;

	const FREQUENCY_SHIFTER_MIN_FREQUENCY      = (0.0) ;
	const FREQUENCY_SHIFTER_MAX_FREQUENCY      = (24000.0) ;
	const FREQUENCY_SHIFTER_DEFAULT_FREQUENCY  = (0.0) ;

	const FREQUENCY_SHIFTER_MIN_LEFT_DIRECTION = (0) ;
	const FREQUENCY_SHIFTER_MAX_LEFT_DIRECTION = (2) ;
	const FREQUENCY_SHIFTER_DEFAULT_LEFT_DIRECTION= (0) ;

	const FREQUENCY_SHIFTER_DIRECTION_DOWN     = (0) ;
	const FREQUENCY_SHIFTER_DIRECTION_UP       = (1) ;
	const FREQUENCY_SHIFTER_DIRECTION_OFF      = (2) ;

	const FREQUENCY_SHIFTER_MIN_RIGHT_DIRECTION= (0) ;
	const FREQUENCY_SHIFTER_MAX_RIGHT_DIRECTION= (2) ;
	const FREQUENCY_SHIFTER_DEFAULT_RIGHT_DIRECTION= (0) ;

	const VOCAL_MORPHER_MIN_PHONEMEA           = (0) ;
	const VOCAL_MORPHER_MAX_PHONEMEA           = (29) ;
	const VOCAL_MORPHER_DEFAULT_PHONEMEA       = (0) ;

	const VOCAL_MORPHER_MIN_PHONEMEA_COARSE_TUNING= (-24) ;
	const VOCAL_MORPHER_MAX_PHONEMEA_COARSE_TUNING= (24) ;
	const VOCAL_MORPHER_DEFAULT_PHONEMEA_COARSE_TUNING= (0) ;

	const VOCAL_MORPHER_MIN_PHONEMEB           = (0) ;
	const VOCAL_MORPHER_MAX_PHONEMEB           = (29) ;
	const VOCAL_MORPHER_DEFAULT_PHONEMEB       = (10) ;

	const VOCAL_MORPHER_MIN_PHONEMEB_COARSE_TUNING= (-24) ;
	const VOCAL_MORPHER_MAX_PHONEMEB_COARSE_TUNING= (24) ;
	const VOCAL_MORPHER_DEFAULT_PHONEMEB_COARSE_TUNING= (0) ;

	const VOCAL_MORPHER_PHONEME_A              = (0) ;
	const VOCAL_MORPHER_PHONEME_E              = (1) ;
	const VOCAL_MORPHER_PHONEME_I              = (2) ;
	const VOCAL_MORPHER_PHONEME_O              = (3) ;
	const VOCAL_MORPHER_PHONEME_U              = (4) ;
	const VOCAL_MORPHER_PHONEME_AA             = (5) ;
	const VOCAL_MORPHER_PHONEME_AE             = (6) ;
	const VOCAL_MORPHER_PHONEME_AH             = (7) ;
	const VOCAL_MORPHER_PHONEME_AO             = (8) ;
	const VOCAL_MORPHER_PHONEME_EH             = (9) ;
	const VOCAL_MORPHER_PHONEME_ER             = (10) ;
	const VOCAL_MORPHER_PHONEME_IH             = (11) ;
	const VOCAL_MORPHER_PHONEME_IY             = (12) ;
	const VOCAL_MORPHER_PHONEME_UH             = (13) ;
	const VOCAL_MORPHER_PHONEME_UW             = (14) ;
	const VOCAL_MORPHER_PHONEME_B              = (15) ;
	const VOCAL_MORPHER_PHONEME_D              = (16) ;
	const VOCAL_MORPHER_PHONEME_F              = (17) ;
	const VOCAL_MORPHER_PHONEME_G              = (18) ;
	const VOCAL_MORPHER_PHONEME_J              = (19) ;
	const VOCAL_MORPHER_PHONEME_K              = (20) ;
	const VOCAL_MORPHER_PHONEME_L              = (21) ;
	const VOCAL_MORPHER_PHONEME_M              = (22) ;
	const VOCAL_MORPHER_PHONEME_N              = (23) ;
	const VOCAL_MORPHER_PHONEME_P              = (24) ;
	const VOCAL_MORPHER_PHONEME_R              = (25) ;
	const VOCAL_MORPHER_PHONEME_S              = (26) ;
	const VOCAL_MORPHER_PHONEME_T              = (27) ;
	const VOCAL_MORPHER_PHONEME_V              = (28) ;
	const VOCAL_MORPHER_PHONEME_Z              = (29) ;

	const VOCAL_MORPHER_WAVEFORM_SINUSOID      = (0) ;
	const VOCAL_MORPHER_WAVEFORM_TRIANGLE      = (1) ;
	const VOCAL_MORPHER_WAVEFORM_SAWTOOTH      = (2) ;

	const VOCAL_MORPHER_MIN_WAVEFORM           = (0) ;
	const VOCAL_MORPHER_MAX_WAVEFORM           = (2) ;
	const VOCAL_MORPHER_DEFAULT_WAVEFORM       = (0) ;

	const VOCAL_MORPHER_MIN_RATE               = (0.0) ;
	const VOCAL_MORPHER_MAX_RATE               = (10.0) ;
	const VOCAL_MORPHER_DEFAULT_RATE           = (1.41) ;

	const PITCH_SHIFTER_MIN_COARSE_TUNE        = (-12) ;
	const PITCH_SHIFTER_MAX_COARSE_TUNE        = (12) ;
	const PITCH_SHIFTER_DEFAULT_COARSE_TUNE    = (12) ;

	const PITCH_SHIFTER_MIN_FINE_TUNE          = (-50) ;
	const PITCH_SHIFTER_MAX_FINE_TUNE          = (50) ;
	const PITCH_SHIFTER_DEFAULT_FINE_TUNE      = (0) ;

	const RING_MODULATOR_MIN_FREQUENCY         = (0.0) ;
	const RING_MODULATOR_MAX_FREQUENCY         = (8000.0) ;
	const RING_MODULATOR_DEFAULT_FREQUENCY     = (440.0) ;

	const RING_MODULATOR_MIN_HIGHPASS_CUTOFF   = (0.0) ;
	const RING_MODULATOR_MAX_HIGHPASS_CUTOFF   = (24000.0) ;
	const RING_MODULATOR_DEFAULT_HIGHPASS_CUTOFF= (800.0) ;

	const RING_MODULATOR_SINUSOID              = (0) ;
	const RING_MODULATOR_SAWTOOTH              = (1) ;
	const RING_MODULATOR_SQUARE                = (2) ;

	const RING_MODULATOR_MIN_WAVEFORM          = (0) ;
	const RING_MODULATOR_MAX_WAVEFORM          = (2) ;
	const RING_MODULATOR_DEFAULT_WAVEFORM      = (0) ;

	const AUTOWAH_MIN_ATTACK_TIME              = (0.0001) ;
	const AUTOWAH_MAX_ATTACK_TIME              = (1.0) ;
	const AUTOWAH_DEFAULT_ATTACK_TIME          = (0.06) ;

	const AUTOWAH_MIN_RELEASE_TIME             = (0.0001) ;
	const AUTOWAH_MAX_RELEASE_TIME             = (1.0) ;
	const AUTOWAH_DEFAULT_RELEASE_TIME         = (0.06) ;

	const AUTOWAH_MIN_RESONANCE                = (2.0) ;
	const AUTOWAH_MAX_RESONANCE                = (1000.0) ;
	const AUTOWAH_DEFAULT_RESONANCE            = (1000.0) ;

	const AUTOWAH_MIN_PEAK_GAIN                = (0.00003) ;
	const AUTOWAH_MAX_PEAK_GAIN                = (31621.0) ;
	const AUTOWAH_DEFAULT_PEAK_GAIN            = (11.22) ;

	const COMPRESSOR_MIN_ONOFF                 = (0) ;
	const COMPRESSOR_MAX_ONOFF                 = (1) ;
	const COMPRESSOR_DEFAULT_ONOFF             = (1) ;

	const EQUALIZER_MIN_LOW_GAIN               = (0.126) ;
	const EQUALIZER_MAX_LOW_GAIN               = (7.943) ;
	const EQUALIZER_DEFAULT_LOW_GAIN           = (1.0) ;

	const EQUALIZER_MIN_LOW_CUTOFF             = (50.0) ;
	const EQUALIZER_MAX_LOW_CUTOFF             = (800.0) ;
	const EQUALIZER_DEFAULT_LOW_CUTOFF         = (200.0) ;

	const EQUALIZER_MIN_MID1_GAIN              = (0.126) ;
	const EQUALIZER_MAX_MID1_GAIN              = (7.943) ;
	const EQUALIZER_DEFAULT_MID1_GAIN          = (1.0) ;

	const EQUALIZER_MIN_MID1_CENTER            = (200.0) ;
	const EQUALIZER_MAX_MID1_CENTER            = (3000.0) ;
	const EQUALIZER_DEFAULT_MID1_CENTER        = (500.0) ;

	const EQUALIZER_MIN_MID1_WIDTH             = (0.01) ;
	const EQUALIZER_MAX_MID1_WIDTH             = (1.0) ;
	const EQUALIZER_DEFAULT_MID1_WIDTH         = (1.0) ;

	const EQUALIZER_MIN_MID2_GAIN              = (0.126) ;
	const EQUALIZER_MAX_MID2_GAIN              = (7.943) ;
	const EQUALIZER_DEFAULT_MID2_GAIN          = (1.0) ;

	const EQUALIZER_MIN_MID2_CENTER            = (1000.0) ;
	const EQUALIZER_MAX_MID2_CENTER            = (8000.0) ;
	const EQUALIZER_DEFAULT_MID2_CENTER        = (3000.0) ;

	const EQUALIZER_MIN_MID2_WIDTH             = (0.01) ;
	const EQUALIZER_MAX_MID2_WIDTH             = (1.0) ;
	const EQUALIZER_DEFAULT_MID2_WIDTH         = (1.0) ;

	const EQUALIZER_MIN_HIGH_GAIN              = (0.126) ;
	const EQUALIZER_MAX_HIGH_GAIN              = (7.943) ;
	const EQUALIZER_DEFAULT_HIGH_GAIN          = (1.0) ;

	const EQUALIZER_MIN_HIGH_CUTOFF            = (4000.0) ;
	const EQUALIZER_MAX_HIGH_CUTOFF            = (16000.0) ;
	const EQUALIZER_DEFAULT_HIGH_CUTOFF        = (6000.0) ;

	const MIN_AIR_ABSORPTION_FACTOR            = (0.0) ;
	const MAX_AIR_ABSORPTION_FACTOR            = (10.0) ;
	const DEFAULT_AIR_ABSORPTION_FACTOR        = (0.0) ;

	const MIN_ROOM_ROLLOFF_FACTOR              = (0.0) ;
	const MAX_ROOM_ROLLOFF_FACTOR              = (10.0) ;
	const DEFAULT_ROOM_ROLLOFF_FACTOR          = (0.0) ;

	const MIN_CONE_OUTER_GAINHF                = (0.0) ;
	const MAX_CONE_OUTER_GAINHF                = (1.0) ;
	const DEFAULT_CONE_OUTER_GAINHF            = (1.0) ;

	const MIN_DIRECT_FILTER_GAINHF_AUTO         = 0 ;
	const MAX_DIRECT_FILTER_GAINHF_AUTO         = 1 ;
	const DEFAULT_DIRECT_FILTER_GAINHF_AUTO     = 1 ;

	const MIN_AUXILIARY_SEND_FILTER_GAIN_AUTO   = 0 ;
	const MAX_AUXILIARY_SEND_FILTER_GAIN_AUTO   = 1 ;
	const DEFAULT_AUXILIARY_SEND_FILTER_GAIN_AUTO = 1 ;

	const MIN_AUXILIARY_SEND_FILTER_GAINHF_AUTO = 0 ;
	const MAX_AUXILIARY_SEND_FILTER_GAINHF_AUTO = 1 ;
	const DEFAULT_AUXILIARY_SEND_FILTER_GAINHF_AUTO = 1 ;

//	const MIN_METERS_PER_UNIT                  = FLT_MIN ; // TODO FIXME
//	const MAX_METERS_PER_UNIT                  = FLT_MAX ; // TODO FIXME
	const DEFAULT_METERS_PER_UNIT              = (1.0) ;



	//----------------------------------------------------------------------------------
	// FFI initialisation
	//----------------------------------------------------------------------------------

	public static $ffi;

	public static function OpenAL()
	{
		if ( static::$ffi ) 
		{ 
			debug_print_backtrace();
			exit("OpenAL::OpenAL() already init".PHP_EOL); 
		}
		
		$cdef = __DIR__ . '/openal.ffi.php.h';
		
		$lib_dir = defined('FFI_LIB_DIR') ? FFI_LIB_DIR : 'lib' ;
		
		$slib = "./$lib_dir/".match( PHP_OS_FAMILY ) 
		{
			'Linux'   => 'libopenal.'.PHP_SHLIB_SUFFIX,
			'Windows' => 'openal.'.PHP_SHLIB_SUFFIX,
		};
		
		static::$ffi = FFI::cdef( file_get_contents( $cdef ) , $slib );

	}


	public static function __callStatic( string $method , array $args ) : mixed
	{
		$callable = [static::$ffi, 'al'.$method];
		return $callable(...$args);
	}


	//----------------------------------------------------------------------------------
	// Helpers
	//---------------------------------------------------------------------------------
	
}


class OpenALC
{
	//--- alc.h

	const FREQUENCY                           = 0x1007 ;
	const REFRESH                             = 0x1008 ;
	const SYNC                                = 0x1009 ;
	const MONO_SOURCES                        = 0x1010 ;
	const STEREO_SOURCES                      = 0x1011 ;

	const NO_ERROR                            = 0 ;
	const INVALID_DEVICE                      = 0xA001 ;
	const INVALID_CONTEXT                     = 0xA002 ;
	const INVALID_ENUM                        = 0xA003 ;
	const INVALID_VALUE                       = 0xA004 ;
	const OUT_OF_MEMORY                       = 0xA005 ;

	const MAJOR_VERSION                       = 0x1000 ;
	const MINOR_VERSION                       = 0x1001 ;
	const ATTRIBUTES_SIZE                     = 0x1002 ;
	const ALL_ATTRIBUTES                      = 0x1003 ;
	const DEFAULT_DEVICE_SPECIFIER            = 0x1004 ;
	const DEVICE_SPECIFIER                    = 0x1005 ;
	const EXTENSIONS                          = 0x1006 ;

	const CAPTURE_DEVICE_SPECIFIER            = 0x310 ;
	const CAPTURE_DEFAULT_DEVICE_SPECIFIER    = 0x311 ;
	const CAPTURE_SAMPLES                     = 0x312 ;

	const DEFAULT_ALL_DEVICES_SPECIFIER       = 0x1012 ;
	const ALL_DEVICES_SPECIFIER               = 0x1013 ;

	//--- alext.h

	const CHAN_MAIN_LOKI                     = 0x500001 ;
	const CHAN_PCM_LOKI                      = 0x500002 ;
	const CHAN_CD_LOKI                       = 0x500003 ;

	const CONNECTED                          = 0x313 ;

	const FORMAT_CHANNELS_SOFT               = 0x1990 ;
	const FORMAT_TYPE_SOFT                   = 0x1991 ;

	const BYTE_SOFT                          = 0x1400 ;
	const UNSIGNED_BYTE_SOFT                 = 0x1401 ;
	const SHORT_SOFT                         = 0x1402 ;
	const UNSIGNED_SHORT_SOFT                = 0x1403 ;
	const INT_SOFT                           = 0x1404 ;
	const UNSIGNED_INT_SOFT                  = 0x1405 ;
	const FLOAT_SOFT                         = 0x1406 ;

	const MONO_SOFT                          = 0x1500 ;
	const STEREO_SOFT                        = 0x1501 ;
	const QUAD_SOFT                          = 0x1503 ;
	const _5POINT1_SOFT                       = 0x1504 ;
	const _6POINT1_SOFT                       = 0x1505 ;
	const _7POINT1_SOFT                       = 0x1506 ;

	const DEFAULT_FILTER_ORDER               = 0x1100 ;

	const HRTF_SOFT                          = 0x1992 ;
	const DONT_CARE_SOFT                     = 0x0002 ;
	const HRTF_STATUS_SOFT                   = 0x1993 ;
	const HRTF_DISABLED_SOFT                 = 0x0000 ;
	const HRTF_ENABLED_SOFT                  = 0x0001 ;
	const HRTF_DENIED_SOFT                   = 0x0002 ;
	const HRTF_REQUIRED_SOFT                 = 0x0003 ;
	const HRTF_HEADPHONES_DETECTED_SOFT      = 0x0004 ;
	const HRTF_UNSUPPORTED_FORMAT_SOFT       = 0x0005 ;
	const NUM_HRTF_SPECIFIERS_SOFT           = 0x1994 ;
	const HRTF_SPECIFIER_SOFT                = 0x1995 ;
	const HRTF_ID_SOFT                       = 0x1996 ;


	const OUTPUT_LIMITER_SOFT                = 0x199A ;

	const DEVICE_CLOCK_SOFT                  = 0x1600 ;
	const DEVICE_LATENCY_SOFT                = 0x1601 ;
	const DEVICE_CLOCK_LATENCY_SOFT          = 0x1602 ;


	const AMBISONIC_LAYOUT_SOFT              = 0x1997 ;
	const AMBISONIC_SCALING_SOFT             = 0x1998 ;
	const AMBISONIC_ORDER_SOFT               = 0x1999 ;
	const MAX_AMBISONIC_ORDER_SOFT           = 0x199B ;

	const BFORMAT3D_SOFT                     = 0x1507 ;

	const FUMA_SOFT                          = 0x0000 ;
	const ACN_SOFT                           = 0x0001 ;

	const SN3D_SOFT                          = 0x0001 ;
	const N3D_SOFT                           = 0x0002 ;

	//--- AL/efx.h

	const EFX_MAJOR_VERSION                  = 0x20001 ;
	const EFX_MINOR_VERSION                  = 0x20002 ;
	const MAX_AUXILIARY_SENDS                = 0x20003 ;


	//----------------------------------------------------------------------------------
	// FFI initialisation
	//----------------------------------------------------------------------------------

	public static function __callStatic( string $method , array $args ) : mixed
	{
		$callable = [OpenAL::$ffi, 'alc'.$method];
		return $callable(...$args);
	}


	//----------------------------------------------------------------------------------
	// Helpers
	//---------------------------------------------------------------------------------

}

// EOF
