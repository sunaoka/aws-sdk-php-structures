<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<48000, 768000>|null $Bitrate
 * @property 'COMPLETE_MAIN'|'EMERGENCY'|null $BitstreamMode
 * @property 'CODING_MODE_2_0'|'CODING_MODE_3_2_LFE'|'CODING_MODE_5_1_4'|null $CodingMode
 * @property 'NONE'|'FILM_STANDARD'|'FILM_LIGHT'|'MUSIC_STANDARD'|'MUSIC_LIGHT'|'SPEECH'|null $DynamicRangeCompressionFlatPanelTv
 * @property 'NONE'|'FILM_STANDARD'|'FILM_LIGHT'|'MUSIC_STANDARD'|'MUSIC_LIGHT'|'SPEECH'|null $DynamicRangeCompressionHomeTheater
 * @property 'NONE'|'FILM_STANDARD'|'FILM_LIGHT'|'MUSIC_STANDARD'|'MUSIC_LIGHT'|'SPEECH'|null $DynamicRangeCompressionPortableHeadphones
 * @property 'NONE'|'FILM_STANDARD'|'FILM_LIGHT'|'MUSIC_STANDARD'|'MUSIC_LIGHT'|'SPEECH'|null $DynamicRangeCompressionPortableSpeakers
 * @property double|null $LoRoCenterMixLevel
 * @property double|null $LoRoSurroundMixLevel
 * @property double|null $LtRtCenterMixLevel
 * @property double|null $LtRtSurroundMixLevel
 * @property int<48000, 48000>|null $SampleRate
 * @property 'NOT_INDICATED'|'LO_RO'|'LT_RT'|'DPL2'|null $StereoDownmix
 */
class Ac4Settings extends Shape
{
    /**
     * @param array{
     *     Bitrate?: int<48000, 768000>|null,
     *     BitstreamMode?: 'COMPLETE_MAIN'|'EMERGENCY'|null,
     *     CodingMode?: 'CODING_MODE_2_0'|'CODING_MODE_3_2_LFE'|'CODING_MODE_5_1_4'|null,
     *     DynamicRangeCompressionFlatPanelTv?: 'NONE'|'FILM_STANDARD'|'FILM_LIGHT'|'MUSIC_STANDARD'|'MUSIC_LIGHT'|'SPEECH'|null,
     *     DynamicRangeCompressionHomeTheater?: 'NONE'|'FILM_STANDARD'|'FILM_LIGHT'|'MUSIC_STANDARD'|'MUSIC_LIGHT'|'SPEECH'|null,
     *     DynamicRangeCompressionPortableHeadphones?: 'NONE'|'FILM_STANDARD'|'FILM_LIGHT'|'MUSIC_STANDARD'|'MUSIC_LIGHT'|'SPEECH'|null,
     *     DynamicRangeCompressionPortableSpeakers?: 'NONE'|'FILM_STANDARD'|'FILM_LIGHT'|'MUSIC_STANDARD'|'MUSIC_LIGHT'|'SPEECH'|null,
     *     LoRoCenterMixLevel?: double|null,
     *     LoRoSurroundMixLevel?: double|null,
     *     LtRtCenterMixLevel?: double|null,
     *     LtRtSurroundMixLevel?: double|null,
     *     SampleRate?: int<48000, 48000>|null,
     *     StereoDownmix?: 'NOT_INDICATED'|'LO_RO'|'LT_RT'|'DPL2'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
