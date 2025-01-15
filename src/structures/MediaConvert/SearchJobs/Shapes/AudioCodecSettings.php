<?php

namespace Sunaoka\Aws\Structures\MediaConvert\SearchJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AacSettings|null $AacSettings
 * @property Ac3Settings|null $Ac3Settings
 * @property AiffSettings|null $AiffSettings
 * @property 'AAC'|'MP2'|'MP3'|'WAV'|'AIFF'|'AC3'|'EAC3'|'EAC3_ATMOS'|'VORBIS'|'OPUS'|'PASSTHROUGH'|'FLAC'|null $Codec
 * @property Eac3AtmosSettings|null $Eac3AtmosSettings
 * @property Eac3Settings|null $Eac3Settings
 * @property FlacSettings|null $FlacSettings
 * @property Mp2Settings|null $Mp2Settings
 * @property Mp3Settings|null $Mp3Settings
 * @property OpusSettings|null $OpusSettings
 * @property VorbisSettings|null $VorbisSettings
 * @property WavSettings|null $WavSettings
 */
class AudioCodecSettings extends Shape
{
    /**
     * @param array{
     *     AacSettings?: AacSettings|null,
     *     Ac3Settings?: Ac3Settings|null,
     *     AiffSettings?: AiffSettings|null,
     *     Codec?: 'AAC'|'MP2'|'MP3'|'WAV'|'AIFF'|'AC3'|'EAC3'|'EAC3_ATMOS'|'VORBIS'|'OPUS'|'PASSTHROUGH'|'FLAC'|null,
     *     Eac3AtmosSettings?: Eac3AtmosSettings|null,
     *     Eac3Settings?: Eac3Settings|null,
     *     FlacSettings?: FlacSettings|null,
     *     Mp2Settings?: Mp2Settings|null,
     *     Mp3Settings?: Mp3Settings|null,
     *     OpusSettings?: OpusSettings|null,
     *     VorbisSettings?: VorbisSettings|null,
     *     WavSettings?: WavSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
