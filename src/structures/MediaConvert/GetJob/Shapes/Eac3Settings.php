<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ATTENUATE_3_DB'|'NONE' $AttenuationControl
 * @property int<32000, 3024000> $Bitrate
 * @property 'COMPLETE_MAIN'|'COMMENTARY'|'EMERGENCY'|'HEARING_IMPAIRED'|'VISUALLY_IMPAIRED' $BitstreamMode
 * @property 'CODING_MODE_1_0'|'CODING_MODE_2_0'|'CODING_MODE_3_2' $CodingMode
 * @property 'ENABLED'|'DISABLED' $DcFilter
 * @property int<1, 31> $Dialnorm
 * @property 'NONE'|'FILM_STANDARD'|'FILM_LIGHT'|'MUSIC_STANDARD'|'MUSIC_LIGHT'|'SPEECH' $DynamicRangeCompressionLine
 * @property 'NONE'|'FILM_STANDARD'|'FILM_LIGHT'|'MUSIC_STANDARD'|'MUSIC_LIGHT'|'SPEECH' $DynamicRangeCompressionRf
 * @property 'LFE'|'NO_LFE' $LfeControl
 * @property 'ENABLED'|'DISABLED' $LfeFilter
 * @property double $LoRoCenterMixLevel
 * @property double $LoRoSurroundMixLevel
 * @property double $LtRtCenterMixLevel
 * @property double $LtRtSurroundMixLevel
 * @property 'FOLLOW_INPUT'|'USE_CONFIGURED' $MetadataControl
 * @property 'WHEN_POSSIBLE'|'NO_PASSTHROUGH' $PassthroughControl
 * @property 'SHIFT_90_DEGREES'|'NO_SHIFT' $PhaseControl
 * @property int<48000, 48000> $SampleRate
 * @property 'NOT_INDICATED'|'LO_RO'|'LT_RT'|'DPL2' $StereoDownmix
 * @property 'NOT_INDICATED'|'ENABLED'|'DISABLED' $SurroundExMode
 * @property 'NOT_INDICATED'|'ENABLED'|'DISABLED' $SurroundMode
 */
class Eac3Settings extends Shape
{
    /**
     * @param array{
     *     AttenuationControl?: 'ATTENUATE_3_DB'|'NONE',
     *     Bitrate?: int<32000, 3024000>,
     *     BitstreamMode?: 'COMPLETE_MAIN'|'COMMENTARY'|'EMERGENCY'|'HEARING_IMPAIRED'|'VISUALLY_IMPAIRED',
     *     CodingMode?: 'CODING_MODE_1_0'|'CODING_MODE_2_0'|'CODING_MODE_3_2',
     *     DcFilter?: 'ENABLED'|'DISABLED',
     *     Dialnorm?: int<1, 31>,
     *     DynamicRangeCompressionLine?: 'NONE'|'FILM_STANDARD'|'FILM_LIGHT'|'MUSIC_STANDARD'|'MUSIC_LIGHT'|'SPEECH',
     *     DynamicRangeCompressionRf?: 'NONE'|'FILM_STANDARD'|'FILM_LIGHT'|'MUSIC_STANDARD'|'MUSIC_LIGHT'|'SPEECH',
     *     LfeControl?: 'LFE'|'NO_LFE',
     *     LfeFilter?: 'ENABLED'|'DISABLED',
     *     LoRoCenterMixLevel?: double,
     *     LoRoSurroundMixLevel?: double,
     *     LtRtCenterMixLevel?: double,
     *     LtRtSurroundMixLevel?: double,
     *     MetadataControl?: 'FOLLOW_INPUT'|'USE_CONFIGURED',
     *     PassthroughControl?: 'WHEN_POSSIBLE'|'NO_PASSTHROUGH',
     *     PhaseControl?: 'SHIFT_90_DEGREES'|'NO_SHIFT',
     *     SampleRate?: int<48000, 48000>,
     *     StereoDownmix?: 'NOT_INDICATED'|'LO_RO'|'LT_RT'|'DPL2',
     *     SurroundExMode?: 'NOT_INDICATED'|'ENABLED'|'DISABLED',
     *     SurroundMode?: 'NOT_INDICATED'|'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
