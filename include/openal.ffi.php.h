// ------ AL/al.h --------------------------------------------------------------------------------------------

typedef char ALboolean;
typedef char ALchar;
typedef signed char ALbyte;
typedef unsigned char ALubyte;
typedef short ALshort;
typedef unsigned short ALushort;
typedef int ALint;
typedef unsigned int ALuint;
typedef int ALsizei;
typedef int ALenum;
typedef float ALfloat;
typedef double ALdouble;
typedef void ALvoid;

void alDopplerFactor(ALfloat value);
void alDopplerVelocity(ALfloat value);
void alSpeedOfSound(ALfloat value);
void alDistanceModel(ALenum distanceModel);

void alEnable(ALenum capability);
void alDisable(ALenum capability);
ALboolean alIsEnabled(ALenum capability);

const ALchar* alGetString(ALenum param);
void alGetBooleanv(ALenum param, ALboolean *values);
void alGetIntegerv(ALenum param, ALint *values);
void alGetFloatv(ALenum param, ALfloat *values);
void alGetDoublev(ALenum param, ALdouble *values);
ALboolean alGetBoolean(ALenum param);
ALint alGetInteger(ALenum param);
ALfloat alGetFloat(ALenum param);
ALdouble alGetDouble(ALenum param);

ALenum alGetError(void);

ALboolean alIsExtensionPresent(const ALchar *extname);
void* alGetProcAddress(const ALchar *fname);
ALenum alGetEnumValue(const ALchar *ename);


void alListenerf(ALenum param, ALfloat value);
void alListener3f(ALenum param, ALfloat value1, ALfloat value2, ALfloat value3);
void alListenerfv(ALenum param, const ALfloat *values);
void alListeneri(ALenum param, ALint value);
void alListener3i(ALenum param, ALint value1, ALint value2, ALint value3);
void alListeneriv(ALenum param, const ALint *values);

void alGetListenerf(ALenum param, ALfloat *value);
void alGetListener3f(ALenum param, ALfloat *value1, ALfloat *value2, ALfloat *value3);
void alGetListenerfv(ALenum param, ALfloat *values);
void alGetListeneri(ALenum param, ALint *value);
void alGetListener3i(ALenum param, ALint *value1, ALint *value2, ALint *value3);
void alGetListeneriv(ALenum param, ALint *values);

void alGenSources(ALsizei n, ALuint *sources);
void alDeleteSources(ALsizei n, const ALuint *sources);
ALboolean alIsSource(ALuint source);

void alSourcef(ALuint source, ALenum param, ALfloat value);
void alSource3f(ALuint source, ALenum param, ALfloat value1, ALfloat value2, ALfloat value3);
void alSourcefv(ALuint source, ALenum param, const ALfloat *values);
void alSourcei(ALuint source, ALenum param, ALint value);
void alSource3i(ALuint source, ALenum param, ALint value1, ALint value2, ALint value3);
void alSourceiv(ALuint source, ALenum param, const ALint *values);

void alGetSourcef(ALuint source, ALenum param, ALfloat *value);
void alGetSource3f(ALuint source, ALenum param, ALfloat *value1, ALfloat *value2, ALfloat *value3);
void alGetSourcefv(ALuint source, ALenum param, ALfloat *values);
void alGetSourcei(ALuint source,  ALenum param, ALint *value);
void alGetSource3i(ALuint source, ALenum param, ALint *value1, ALint *value2, ALint *value3);
void alGetSourceiv(ALuint source,  ALenum param, ALint *values);

void alSourcePlayv(ALsizei n, const ALuint *sources);
void alSourceStopv(ALsizei n, const ALuint *sources);
void alSourceRewindv(ALsizei n, const ALuint *sources);
void alSourcePausev(ALsizei n, const ALuint *sources);

void alSourcePlay(ALuint source);
void alSourceStop(ALuint source);
void alSourceRewind(ALuint source);
void alSourcePause(ALuint source);

void alSourceQueueBuffers(ALuint source, ALsizei nb, const ALuint *buffers);
void alSourceUnqueueBuffers(ALuint source, ALsizei nb, ALuint *buffers);

void alGenBuffers(ALsizei n, ALuint *buffers);
void alDeleteBuffers(ALsizei n, const ALuint *buffers);
ALboolean alIsBuffer(ALuint buffer);

void alBufferData(ALuint buffer, ALenum format, const ALvoid *data, ALsizei size, ALsizei freq);

void alBufferf(ALuint buffer, ALenum param, ALfloat value);
void alBuffer3f(ALuint buffer, ALenum param, ALfloat value1, ALfloat value2, ALfloat value3);
void alBufferfv(ALuint buffer, ALenum param, const ALfloat *values);
void alBufferi(ALuint buffer, ALenum param, ALint value);
void alBuffer3i(ALuint buffer, ALenum param, ALint value1, ALint value2, ALint value3);
void alBufferiv(ALuint buffer, ALenum param, const ALint *values);

void alGetBufferf(ALuint buffer, ALenum param, ALfloat *value);
void alGetBuffer3f(ALuint buffer, ALenum param, ALfloat *value1, ALfloat *value2, ALfloat *value3);
void alGetBufferfv(ALuint buffer, ALenum param, ALfloat *values);
void alGetBufferi(ALuint buffer, ALenum param, ALint *value);
void alGetBuffer3i(ALuint buffer, ALenum param, ALint *value1, ALint *value2, ALint *value3);
void alGetBufferiv(ALuint buffer, ALenum param, ALint *values);


// --- AL/alc.h --------------------------------------------------------------------------------------------------------

typedef struct ALCdevice ALCdevice;
typedef struct ALCcontext ALCcontext;
typedef char ALCboolean;
typedef char ALCchar;
typedef signed char ALCbyte;
typedef unsigned char ALCubyte;
typedef short ALCshort;
typedef unsigned short ALCushort;
typedef int ALCint;
typedef unsigned int ALCuint;
typedef int ALCsizei;
typedef int ALCenum;
typedef float ALCfloat;
typedef double ALCdouble;
typedef void ALCvoid;


ALCcontext* alcCreateContext(ALCdevice *device, const ALCint *attrlist);
ALCboolean  alcMakeContextCurrent(ALCcontext *context);
void        alcProcessContext(ALCcontext *context);
void        alcSuspendContext(ALCcontext *context);
void        alcDestroyContext(ALCcontext *context);
ALCcontext* alcGetCurrentContext(void);
ALCdevice*  alcGetContextsDevice(ALCcontext *context);

ALCdevice* alcOpenDevice(const ALCchar *devicename);
ALCboolean alcCloseDevice(ALCdevice *device);

ALCenum alcGetError(ALCdevice *device);

ALCboolean alcIsExtensionPresent(ALCdevice *device, const ALCchar *extname);
ALCvoid*   alcGetProcAddress(ALCdevice *device, const ALCchar *funcname);
ALCenum    alcGetEnumValue(ALCdevice *device, const ALCchar *enumname);

const ALCchar* alcGetString(ALCdevice *device, ALCenum param);
void           alcGetIntegerv(ALCdevice *device, ALCenum param, ALCsizei size, ALCint *values);

ALCdevice* alcCaptureOpenDevice(const ALCchar *devicename, ALCuint frequency, ALCenum format, ALCsizei buffersize);
ALCboolean alcCaptureCloseDevice(ALCdevice *device);
void       alcCaptureStart(ALCdevice *device);
void       alcCaptureStop(ALCdevice *device);
void       alcCaptureSamples(ALCdevice *device, ALCvoid *buffer, ALCsizei samples);


// --- AL/alext.h ------------------------------------------------------------------------------------------------------

//void alBufferDataStatic(const ALint buffer, ALenum format, ALvoid *data, ALsizei len, ALsizei freq);

ALCboolean  alcSetThreadContext(ALCcontext *context);
ALCcontext* alcGetThreadContext(void);

void alBufferSubDataSOFT(ALuint buffer,ALenum format,const ALvoid *data,ALsizei offset,ALsizei length);

//typedef void (*LPALFOLDBACKCALLBACK)(ALenum,ALsizei);
//void alRequestFoldbackStart(ALenum mode,ALsizei count,ALsizei length,ALfloat *mem,LPALFOLDBACKCALLBACK callback);
//void alRequestFoldbackStop(void);

void alBufferSamplesSOFT(ALuint buffer, ALuint samplerate, ALenum internalformat, ALsizei samples, ALenum channels, ALenum type, const ALvoid *data);
void alBufferSubSamplesSOFT(ALuint buffer, ALsizei offset, ALsizei samples, ALenum channels, ALenum type, const ALvoid *data);
void alGetBufferSamplesSOFT(ALuint buffer, ALsizei offset, ALsizei samples, ALenum channels, ALenum type, ALvoid *data);
ALboolean alIsBufferFormatSupportedSOFT(ALenum format);


ALCdevice* alcLoopbackOpenDeviceSOFT(const ALCchar *deviceName);
ALCboolean alcIsRenderFormatSupportedSOFT(ALCdevice *device, ALCsizei freq, ALCenum channels, ALCenum type);
void alcRenderSamplesSOFT(ALCdevice *device, ALCvoid *buffer, ALCsizei samples);

//typedef _alsoft_int64_t ALint64SOFT;
//typedef _alsoft_uint64_t ALuint64SOFT;
void alSourcedSOFT(ALuint source, ALenum param, ALdouble value);
void alSource3dSOFT(ALuint source, ALenum param, ALdouble value1, ALdouble value2, ALdouble value3);
void alSourcedvSOFT(ALuint source, ALenum param, const ALdouble *values);
void alGetSourcedSOFT(ALuint source, ALenum param, ALdouble *value);
void alGetSource3dSOFT(ALuint source, ALenum param, ALdouble *value1, ALdouble *value2, ALdouble *value3);
void alGetSourcedvSOFT(ALuint source, ALenum param, ALdouble *values);
//void alSourcei64SOFT(ALuint source, ALenum param, ALint64SOFT value);
//void alSource3i64SOFT(ALuint source, ALenum param, ALint64SOFT value1, ALint64SOFT value2, ALint64SOFT value3);
//void alSourcei64vSOFT(ALuint source, ALenum param, const ALint64SOFT *values);
//void alGetSourcei64SOFT(ALuint source, ALenum param, ALint64SOFT *value);
//void alGetSource3i64SOFT(ALuint source, ALenum param, ALint64SOFT *value1, ALint64SOFT *value2, ALint64SOFT *value3);
//void alGetSourcei64vSOFT(ALuint source, ALenum param, ALint64SOFT *values);


void alDeferUpdatesSOFT(void);
void alProcessUpdatesSOFT(void);

void alcDevicePauseSOFT(ALCdevice *device);
void alcDeviceResumeSOFT(ALCdevice *device);

const ALCchar* alcGetStringiSOFT(ALCdevice *device, ALCenum paramName, ALCsizei index);
ALCboolean alcResetDeviceSOFT(ALCdevice *device, const ALCint *attribs);

const ALchar* alGetStringiSOFT(ALenum pname, ALsizei index);

//typedef _alsoft_int64_t ALCint64SOFT;
//typedef _alsoft_uint64_t ALCuint64SOFT;

//void alcGetInteger64vSOFT(ALCdevice *device, ALCenum pname, ALsizei size, ALCint64SOFT *values);

typedef void (*ALEVENTPROCSOFT)(ALenum eventType, ALuint object, ALuint param,
                                           ALsizei length, const ALchar *message,
                                           void *userParam);

void alEventControlSOFT(ALsizei count, const ALenum *types, ALboolean enable);
void alEventCallbackSOFT(ALEVENTPROCSOFT callback, void *userParam);
void* alGetPointerSOFT(ALenum pname);
void alGetPointervSOFT(ALenum pname, void **values);



// --- AL/efx.h --------------------------------------------------------------------------------------------------------


void alGenEffects(ALsizei n, ALuint *effects);
void alDeleteEffects(ALsizei n, const ALuint *effects);
ALboolean alIsEffect(ALuint effect);
void alEffecti(ALuint effect, ALenum param, ALint iValue);
void alEffectiv(ALuint effect, ALenum param, const ALint *piValues);
void alEffectf(ALuint effect, ALenum param, ALfloat flValue);
void alEffectfv(ALuint effect, ALenum param, const ALfloat *pflValues);
void alGetEffecti(ALuint effect, ALenum param, ALint *piValue);
void alGetEffectiv(ALuint effect, ALenum param, ALint *piValues);
void alGetEffectf(ALuint effect, ALenum param, ALfloat *pflValue);
void alGetEffectfv(ALuint effect, ALenum param, ALfloat *pflValues);

void alGenFilters(ALsizei n, ALuint *filters);
void alDeleteFilters(ALsizei n, const ALuint *filters);
ALboolean alIsFilter(ALuint filter);
void alFilteri(ALuint filter, ALenum param, ALint iValue);
void alFilteriv(ALuint filter, ALenum param, const ALint *piValues);
void alFilterf(ALuint filter, ALenum param, ALfloat flValue);
void alFilterfv(ALuint filter, ALenum param, const ALfloat *pflValues);
void alGetFilteri(ALuint filter, ALenum param, ALint *piValue);
void alGetFilteriv(ALuint filter, ALenum param, ALint *piValues);
void alGetFilterf(ALuint filter, ALenum param, ALfloat *pflValue);
void alGetFilterfv(ALuint filter, ALenum param, ALfloat *pflValues);

void alGenAuxiliaryEffectSlots(ALsizei n, ALuint *effectslots);
void alDeleteAuxiliaryEffectSlots(ALsizei n, const ALuint *effectslots);
ALboolean alIsAuxiliaryEffectSlot(ALuint effectslot);
void alAuxiliaryEffectSloti(ALuint effectslot, ALenum param, ALint iValue);
void alAuxiliaryEffectSlotiv(ALuint effectslot, ALenum param, const ALint *piValues);
void alAuxiliaryEffectSlotf(ALuint effectslot, ALenum param, ALfloat flValue);
void alAuxiliaryEffectSlotfv(ALuint effectslot, ALenum param, const ALfloat *pflValues);
void alGetAuxiliaryEffectSloti(ALuint effectslot, ALenum param, ALint *piValue);
void alGetAuxiliaryEffectSlotiv(ALuint effectslot, ALenum param, ALint *piValues);
void alGetAuxiliaryEffectSlotf(ALuint effectslot, ALenum param, ALfloat *pflValue);
void alGetAuxiliaryEffectSlotfv(ALuint effectslot, ALenum param, ALfloat *pflValues);


// --- AL/efx-presets.h ------------------------------------------------------------------------------------------------

// TODO


//EOF
