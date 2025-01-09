<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AacSettings $AacSettings
 * @property Ac3Settings $Ac3Settings
 * @property AiffSettings $AiffSettings
 * @property 'AAC'|'MP2'|'MP3'|'WAV'|'AIFF'|'AC3'|'EAC3'|'EAC3_ATMOS'|'VORBIS'|'OPUS'|'PASSTHROUGH'|'FLAC' $Codec
 * @property Eac3AtmosSettings $Eac3AtmosSettings
 * @property Eac3Settings $Eac3Settings
 * @property FlacSettings $FlacSettings
 * @property Mp2Settings $Mp2Settings
 * @property Mp3Settings $Mp3Settings
 * @property OpusSettings $OpusSettings
 * @property VorbisSettings $VorbisSettings
 * @property WavSettings $WavSettings
 */
class AudioCodecSettings extends Shape
{
    /**
     * @param array{
     *     AacSettings?: AacSettings,
     *     Ac3Settings?: Ac3Settings,
     *     AiffSettings?: AiffSettings,
     *     Codec?: 'AAC'|'MP2'|'MP3'|'WAV'|'AIFF'|'AC3'|'EAC3'|'EAC3_ATMOS'|'VORBIS'|'OPUS'|'PASSTHROUGH'|'FLAC',
     *     Eac3AtmosSettings?: Eac3AtmosSettings,
     *     Eac3Settings?: Eac3Settings,
     *     FlacSettings?: FlacSettings,
     *     Mp2Settings?: Mp2Settings,
     *     Mp3Settings?: Mp3Settings,
     *     OpusSettings?: OpusSettings,
     *     VorbisSettings?: VorbisSettings,
     *     WavSettings?: WavSettings
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
