<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannelClass\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ATTENUATE_3_DB'|'NONE'|null $AttenuationControl
 * @property double|null $Bitrate
 * @property 'COMMENTARY'|'COMPLETE_MAIN'|'EMERGENCY'|'HEARING_IMPAIRED'|'VISUALLY_IMPAIRED'|null $BitstreamMode
 * @property 'CODING_MODE_1_0'|'CODING_MODE_2_0'|'CODING_MODE_3_2'|null $CodingMode
 * @property 'DISABLED'|'ENABLED'|null $DcFilter
 * @property int|null $Dialnorm
 * @property 'FILM_LIGHT'|'FILM_STANDARD'|'MUSIC_LIGHT'|'MUSIC_STANDARD'|'NONE'|'SPEECH'|null $DrcLine
 * @property 'FILM_LIGHT'|'FILM_STANDARD'|'MUSIC_LIGHT'|'MUSIC_STANDARD'|'NONE'|'SPEECH'|null $DrcRf
 * @property 'LFE'|'NO_LFE'|null $LfeControl
 * @property 'DISABLED'|'ENABLED'|null $LfeFilter
 * @property double|null $LoRoCenterMixLevel
 * @property double|null $LoRoSurroundMixLevel
 * @property double|null $LtRtCenterMixLevel
 * @property double|null $LtRtSurroundMixLevel
 * @property 'FOLLOW_INPUT'|'USE_CONFIGURED'|null $MetadataControl
 * @property 'NO_PASSTHROUGH'|'WHEN_POSSIBLE'|null $PassthroughControl
 * @property 'NO_SHIFT'|'SHIFT_90_DEGREES'|null $PhaseControl
 * @property 'DPL2'|'LO_RO'|'LT_RT'|'NOT_INDICATED'|null $StereoDownmix
 * @property 'DISABLED'|'ENABLED'|'NOT_INDICATED'|null $SurroundExMode
 * @property 'DISABLED'|'ENABLED'|'NOT_INDICATED'|null $SurroundMode
 */
class Eac3Settings extends Shape
{
    /**
     * @param array{
     *     AttenuationControl?: 'ATTENUATE_3_DB'|'NONE'|null,
     *     Bitrate?: double|null,
     *     BitstreamMode?: 'COMMENTARY'|'COMPLETE_MAIN'|'EMERGENCY'|'HEARING_IMPAIRED'|'VISUALLY_IMPAIRED'|null,
     *     CodingMode?: 'CODING_MODE_1_0'|'CODING_MODE_2_0'|'CODING_MODE_3_2'|null,
     *     DcFilter?: 'DISABLED'|'ENABLED'|null,
     *     Dialnorm?: int|null,
     *     DrcLine?: 'FILM_LIGHT'|'FILM_STANDARD'|'MUSIC_LIGHT'|'MUSIC_STANDARD'|'NONE'|'SPEECH'|null,
     *     DrcRf?: 'FILM_LIGHT'|'FILM_STANDARD'|'MUSIC_LIGHT'|'MUSIC_STANDARD'|'NONE'|'SPEECH'|null,
     *     LfeControl?: 'LFE'|'NO_LFE'|null,
     *     LfeFilter?: 'DISABLED'|'ENABLED'|null,
     *     LoRoCenterMixLevel?: double|null,
     *     LoRoSurroundMixLevel?: double|null,
     *     LtRtCenterMixLevel?: double|null,
     *     LtRtSurroundMixLevel?: double|null,
     *     MetadataControl?: 'FOLLOW_INPUT'|'USE_CONFIGURED'|null,
     *     PassthroughControl?: 'NO_PASSTHROUGH'|'WHEN_POSSIBLE'|null,
     *     PhaseControl?: 'NO_SHIFT'|'SHIFT_90_DEGREES'|null,
     *     StereoDownmix?: 'DPL2'|'LO_RO'|'LT_RT'|'NOT_INDICATED'|null,
     *     SurroundExMode?: 'DISABLED'|'ENABLED'|'NOT_INDICATED'|null,
     *     SurroundMode?: 'DISABLED'|'ENABLED'|'NOT_INDICATED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
