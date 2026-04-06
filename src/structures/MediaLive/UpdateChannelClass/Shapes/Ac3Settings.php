<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannelClass\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $Bitrate
 * @property 'COMMENTARY'|'COMPLETE_MAIN'|'DIALOGUE'|'EMERGENCY'|'HEARING_IMPAIRED'|'MUSIC_AND_EFFECTS'|'VISUALLY_IMPAIRED'|'VOICE_OVER'|null $BitstreamMode
 * @property 'CODING_MODE_1_0'|'CODING_MODE_1_1'|'CODING_MODE_2_0'|'CODING_MODE_3_2_LFE'|null $CodingMode
 * @property int<1, 31>|null $Dialnorm
 * @property 'FILM_STANDARD'|'NONE'|null $DrcProfile
 * @property 'DISABLED'|'ENABLED'|null $LfeFilter
 * @property 'FOLLOW_INPUT'|'USE_CONFIGURED'|null $MetadataControl
 * @property 'ATTENUATE_3_DB'|'NONE'|null $AttenuationControl
 */
class Ac3Settings extends Shape
{
    /**
     * @param array{
     *     Bitrate?: double|null,
     *     BitstreamMode?: 'COMMENTARY'|'COMPLETE_MAIN'|'DIALOGUE'|'EMERGENCY'|'HEARING_IMPAIRED'|'MUSIC_AND_EFFECTS'|'VISUALLY_IMPAIRED'|'VOICE_OVER'|null,
     *     CodingMode?: 'CODING_MODE_1_0'|'CODING_MODE_1_1'|'CODING_MODE_2_0'|'CODING_MODE_3_2_LFE'|null,
     *     Dialnorm?: int<1, 31>|null,
     *     DrcProfile?: 'FILM_STANDARD'|'NONE'|null,
     *     LfeFilter?: 'DISABLED'|'ENABLED'|null,
     *     MetadataControl?: 'FOLLOW_INPUT'|'USE_CONFIGURED'|null,
     *     AttenuationControl?: 'ATTENUATE_3_DB'|'NONE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
