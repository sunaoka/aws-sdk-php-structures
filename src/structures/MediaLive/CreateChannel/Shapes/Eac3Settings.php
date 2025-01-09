<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ATTENUATE_3_DB'|'NONE' $AttenuationControl
 * @property double $Bitrate
 * @property 'COMMENTARY'|'COMPLETE_MAIN'|'EMERGENCY'|'HEARING_IMPAIRED'|'VISUALLY_IMPAIRED' $BitstreamMode
 * @property 'CODING_MODE_1_0'|'CODING_MODE_2_0'|'CODING_MODE_3_2' $CodingMode
 * @property 'DISABLED'|'ENABLED' $DcFilter
 * @property int<1, 31> $Dialnorm
 * @property 'FILM_LIGHT'|'FILM_STANDARD'|'MUSIC_LIGHT'|'MUSIC_STANDARD'|'NONE'|'SPEECH' $DrcLine
 * @property 'FILM_LIGHT'|'FILM_STANDARD'|'MUSIC_LIGHT'|'MUSIC_STANDARD'|'NONE'|'SPEECH' $DrcRf
 * @property 'LFE'|'NO_LFE' $LfeControl
 * @property 'DISABLED'|'ENABLED' $LfeFilter
 * @property double $LoRoCenterMixLevel
 * @property double $LoRoSurroundMixLevel
 * @property double $LtRtCenterMixLevel
 * @property double $LtRtSurroundMixLevel
 * @property 'FOLLOW_INPUT'|'USE_CONFIGURED' $MetadataControl
 * @property 'NO_PASSTHROUGH'|'WHEN_POSSIBLE' $PassthroughControl
 * @property 'NO_SHIFT'|'SHIFT_90_DEGREES' $PhaseControl
 * @property 'DPL2'|'LO_RO'|'LT_RT'|'NOT_INDICATED' $StereoDownmix
 * @property 'DISABLED'|'ENABLED'|'NOT_INDICATED' $SurroundExMode
 * @property 'DISABLED'|'ENABLED'|'NOT_INDICATED' $SurroundMode
 */
class Eac3Settings extends Shape
{
    /**
     * @param array{
     *     AttenuationControl?: 'ATTENUATE_3_DB'|'NONE',
     *     Bitrate?: double,
     *     BitstreamMode?: 'COMMENTARY'|'COMPLETE_MAIN'|'EMERGENCY'|'HEARING_IMPAIRED'|'VISUALLY_IMPAIRED',
     *     CodingMode?: 'CODING_MODE_1_0'|'CODING_MODE_2_0'|'CODING_MODE_3_2',
     *     DcFilter?: 'DISABLED'|'ENABLED',
     *     Dialnorm?: int<1, 31>,
     *     DrcLine?: 'FILM_LIGHT'|'FILM_STANDARD'|'MUSIC_LIGHT'|'MUSIC_STANDARD'|'NONE'|'SPEECH',
     *     DrcRf?: 'FILM_LIGHT'|'FILM_STANDARD'|'MUSIC_LIGHT'|'MUSIC_STANDARD'|'NONE'|'SPEECH',
     *     LfeControl?: 'LFE'|'NO_LFE',
     *     LfeFilter?: 'DISABLED'|'ENABLED',
     *     LoRoCenterMixLevel?: double,
     *     LoRoSurroundMixLevel?: double,
     *     LtRtCenterMixLevel?: double,
     *     LtRtSurroundMixLevel?: double,
     *     MetadataControl?: 'FOLLOW_INPUT'|'USE_CONFIGURED',
     *     PassthroughControl?: 'NO_PASSTHROUGH'|'WHEN_POSSIBLE',
     *     PhaseControl?: 'NO_SHIFT'|'SHIFT_90_DEGREES',
     *     StereoDownmix?: 'DPL2'|'LO_RO'|'LT_RT'|'NOT_INDICATED',
     *     SurroundExMode?: 'DISABLED'|'ENABLED'|'NOT_INDICATED',
     *     SurroundMode?: 'DISABLED'|'ENABLED'|'NOT_INDICATED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
