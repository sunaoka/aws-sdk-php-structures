<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJobsQueryResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<384000, 1024000>|null $Bitrate
 * @property 'COMPLETE_MAIN'|null $BitstreamMode
 * @property 'CODING_MODE_AUTO'|'CODING_MODE_5_1_4'|'CODING_MODE_7_1_4'|'CODING_MODE_9_1_6'|null $CodingMode
 * @property 'ENABLED'|'DISABLED'|null $DialogueIntelligence
 * @property 'SPECIFIED'|'INITIALIZE_FROM_SOURCE'|null $DownmixControl
 * @property 'NONE'|'FILM_STANDARD'|'FILM_LIGHT'|'MUSIC_STANDARD'|'MUSIC_LIGHT'|'SPEECH'|null $DynamicRangeCompressionLine
 * @property 'NONE'|'FILM_STANDARD'|'FILM_LIGHT'|'MUSIC_STANDARD'|'MUSIC_LIGHT'|'SPEECH'|null $DynamicRangeCompressionRf
 * @property 'SPECIFIED'|'INITIALIZE_FROM_SOURCE'|null $DynamicRangeControl
 * @property double|null $LoRoCenterMixLevel
 * @property double|null $LoRoSurroundMixLevel
 * @property double|null $LtRtCenterMixLevel
 * @property double|null $LtRtSurroundMixLevel
 * @property 'LEQ_A'|'ITU_BS_1770_1'|'ITU_BS_1770_2'|'ITU_BS_1770_3'|'ITU_BS_1770_4'|null $MeteringMode
 * @property int<48000, 48000>|null $SampleRate
 * @property int<0, 100>|null $SpeechThreshold
 * @property 'NOT_INDICATED'|'STEREO'|'SURROUND'|'DPL2'|null $StereoDownmix
 * @property 'NOT_INDICATED'|'ENABLED'|'DISABLED'|null $SurroundExMode
 */
class Eac3AtmosSettings extends Shape
{
    /**
     * @param array{
     *     Bitrate?: int<384000, 1024000>|null,
     *     BitstreamMode?: 'COMPLETE_MAIN'|null,
     *     CodingMode?: 'CODING_MODE_AUTO'|'CODING_MODE_5_1_4'|'CODING_MODE_7_1_4'|'CODING_MODE_9_1_6'|null,
     *     DialogueIntelligence?: 'ENABLED'|'DISABLED'|null,
     *     DownmixControl?: 'SPECIFIED'|'INITIALIZE_FROM_SOURCE'|null,
     *     DynamicRangeCompressionLine?: 'NONE'|'FILM_STANDARD'|'FILM_LIGHT'|'MUSIC_STANDARD'|'MUSIC_LIGHT'|'SPEECH'|null,
     *     DynamicRangeCompressionRf?: 'NONE'|'FILM_STANDARD'|'FILM_LIGHT'|'MUSIC_STANDARD'|'MUSIC_LIGHT'|'SPEECH'|null,
     *     DynamicRangeControl?: 'SPECIFIED'|'INITIALIZE_FROM_SOURCE'|null,
     *     LoRoCenterMixLevel?: double|null,
     *     LoRoSurroundMixLevel?: double|null,
     *     LtRtCenterMixLevel?: double|null,
     *     LtRtSurroundMixLevel?: double|null,
     *     MeteringMode?: 'LEQ_A'|'ITU_BS_1770_1'|'ITU_BS_1770_2'|'ITU_BS_1770_3'|'ITU_BS_1770_4'|null,
     *     SampleRate?: int<48000, 48000>|null,
     *     SpeechThreshold?: int<0, 100>|null,
     *     StereoDownmix?: 'NOT_INDICATED'|'STEREO'|'SURROUND'|'DPL2'|null,
     *     SurroundExMode?: 'NOT_INDICATED'|'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
