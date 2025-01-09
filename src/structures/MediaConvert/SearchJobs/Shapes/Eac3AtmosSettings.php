<?php

namespace Sunaoka\Aws\Structures\MediaConvert\SearchJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Bitrate
 * @property 'COMPLETE_MAIN' $BitstreamMode
 * @property 'CODING_MODE_AUTO'|'CODING_MODE_5_1_4'|'CODING_MODE_7_1_4'|'CODING_MODE_9_1_6' $CodingMode
 * @property 'ENABLED'|'DISABLED' $DialogueIntelligence
 * @property 'SPECIFIED'|'INITIALIZE_FROM_SOURCE' $DownmixControl
 * @property 'NONE'|'FILM_STANDARD'|'FILM_LIGHT'|'MUSIC_STANDARD'|'MUSIC_LIGHT'|'SPEECH' $DynamicRangeCompressionLine
 * @property 'NONE'|'FILM_STANDARD'|'FILM_LIGHT'|'MUSIC_STANDARD'|'MUSIC_LIGHT'|'SPEECH' $DynamicRangeCompressionRf
 * @property 'SPECIFIED'|'INITIALIZE_FROM_SOURCE' $DynamicRangeControl
 * @property double $LoRoCenterMixLevel
 * @property double $LoRoSurroundMixLevel
 * @property double $LtRtCenterMixLevel
 * @property double $LtRtSurroundMixLevel
 * @property 'LEQ_A'|'ITU_BS_1770_1'|'ITU_BS_1770_2'|'ITU_BS_1770_3'|'ITU_BS_1770_4' $MeteringMode
 * @property int $SampleRate
 * @property int $SpeechThreshold
 * @property 'NOT_INDICATED'|'STEREO'|'SURROUND'|'DPL2' $StereoDownmix
 * @property 'NOT_INDICATED'|'ENABLED'|'DISABLED' $SurroundExMode
 */
class Eac3AtmosSettings extends Shape
{
    /**
     * @param array{
     *     Bitrate?: int,
     *     BitstreamMode?: 'COMPLETE_MAIN',
     *     CodingMode?: 'CODING_MODE_AUTO'|'CODING_MODE_5_1_4'|'CODING_MODE_7_1_4'|'CODING_MODE_9_1_6',
     *     DialogueIntelligence?: 'ENABLED'|'DISABLED',
     *     DownmixControl?: 'SPECIFIED'|'INITIALIZE_FROM_SOURCE',
     *     DynamicRangeCompressionLine?: 'NONE'|'FILM_STANDARD'|'FILM_LIGHT'|'MUSIC_STANDARD'|'MUSIC_LIGHT'|'SPEECH',
     *     DynamicRangeCompressionRf?: 'NONE'|'FILM_STANDARD'|'FILM_LIGHT'|'MUSIC_STANDARD'|'MUSIC_LIGHT'|'SPEECH',
     *     DynamicRangeControl?: 'SPECIFIED'|'INITIALIZE_FROM_SOURCE',
     *     LoRoCenterMixLevel?: double,
     *     LoRoSurroundMixLevel?: double,
     *     LtRtCenterMixLevel?: double,
     *     LtRtSurroundMixLevel?: double,
     *     MeteringMode?: 'LEQ_A'|'ITU_BS_1770_1'|'ITU_BS_1770_2'|'ITU_BS_1770_3'|'ITU_BS_1770_4',
     *     SampleRate?: int,
     *     SpeechThreshold?: int,
     *     StereoDownmix?: 'NOT_INDICATED'|'STEREO'|'SURROUND'|'DPL2',
     *     SurroundExMode?: 'NOT_INDICATED'|'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
