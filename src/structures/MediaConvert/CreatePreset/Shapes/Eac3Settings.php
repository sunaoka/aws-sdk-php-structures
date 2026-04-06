<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreatePreset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ATTENUATE_3_DB'|'NONE'|null $AttenuationControl
 * @property int<32000, 3024000>|null $Bitrate
 * @property 'COMPLETE_MAIN'|'COMMENTARY'|'EMERGENCY'|'HEARING_IMPAIRED'|'VISUALLY_IMPAIRED'|null $BitstreamMode
 * @property 'CODING_MODE_1_0'|'CODING_MODE_2_0'|'CODING_MODE_3_2'|'CODING_MODE_AUTO'|null $CodingMode
 * @property 'ENABLED'|'DISABLED'|null $DcFilter
 * @property int<1, 31>|null $Dialnorm
 * @property 'NONE'|'FILM_STANDARD'|'FILM_LIGHT'|'MUSIC_STANDARD'|'MUSIC_LIGHT'|'SPEECH'|null $DynamicRangeCompressionLine
 * @property 'NONE'|'FILM_STANDARD'|'FILM_LIGHT'|'MUSIC_STANDARD'|'MUSIC_LIGHT'|'SPEECH'|null $DynamicRangeCompressionRf
 * @property 'LFE'|'NO_LFE'|null $LfeControl
 * @property 'ENABLED'|'DISABLED'|null $LfeFilter
 * @property double|null $LoRoCenterMixLevel
 * @property double|null $LoRoSurroundMixLevel
 * @property double|null $LtRtCenterMixLevel
 * @property double|null $LtRtSurroundMixLevel
 * @property 'FOLLOW_INPUT'|'USE_CONFIGURED'|null $MetadataControl
 * @property 'WHEN_POSSIBLE'|'NO_PASSTHROUGH'|null $PassthroughControl
 * @property 'SHIFT_90_DEGREES'|'NO_SHIFT'|null $PhaseControl
 * @property int<48000, 48000>|null $SampleRate
 * @property 'NOT_INDICATED'|'LO_RO'|'LT_RT'|'DPL2'|null $StereoDownmix
 * @property 'NOT_INDICATED'|'ENABLED'|'DISABLED'|null $SurroundExMode
 * @property 'NOT_INDICATED'|'ENABLED'|'DISABLED'|null $SurroundMode
 */
class Eac3Settings extends Shape
{
    /**
     * @param array{
     *     AttenuationControl?: 'ATTENUATE_3_DB'|'NONE'|null,
     *     Bitrate?: int<32000, 3024000>|null,
     *     BitstreamMode?: 'COMPLETE_MAIN'|'COMMENTARY'|'EMERGENCY'|'HEARING_IMPAIRED'|'VISUALLY_IMPAIRED'|null,
     *     CodingMode?: 'CODING_MODE_1_0'|'CODING_MODE_2_0'|'CODING_MODE_3_2'|'CODING_MODE_AUTO'|null,
     *     DcFilter?: 'ENABLED'|'DISABLED'|null,
     *     Dialnorm?: int<1, 31>|null,
     *     DynamicRangeCompressionLine?: 'NONE'|'FILM_STANDARD'|'FILM_LIGHT'|'MUSIC_STANDARD'|'MUSIC_LIGHT'|'SPEECH'|null,
     *     DynamicRangeCompressionRf?: 'NONE'|'FILM_STANDARD'|'FILM_LIGHT'|'MUSIC_STANDARD'|'MUSIC_LIGHT'|'SPEECH'|null,
     *     LfeControl?: 'LFE'|'NO_LFE'|null,
     *     LfeFilter?: 'ENABLED'|'DISABLED'|null,
     *     LoRoCenterMixLevel?: double|null,
     *     LoRoSurroundMixLevel?: double|null,
     *     LtRtCenterMixLevel?: double|null,
     *     LtRtSurroundMixLevel?: double|null,
     *     MetadataControl?: 'FOLLOW_INPUT'|'USE_CONFIGURED'|null,
     *     PassthroughControl?: 'WHEN_POSSIBLE'|'NO_PASSTHROUGH'|null,
     *     PhaseControl?: 'SHIFT_90_DEGREES'|'NO_SHIFT'|null,
     *     SampleRate?: int<48000, 48000>|null,
     *     StereoDownmix?: 'NOT_INDICATED'|'LO_RO'|'LT_RT'|'DPL2'|null,
     *     SurroundExMode?: 'NOT_INDICATED'|'ENABLED'|'DISABLED'|null,
     *     SurroundMode?: 'NOT_INDICATED'|'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
