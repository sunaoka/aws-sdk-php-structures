<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $Bitrate
 * @property 'COMMENTARY'|'COMPLETE_MAIN'|'DIALOGUE'|'EMERGENCY'|'HEARING_IMPAIRED'|'MUSIC_AND_EFFECTS'|'VISUALLY_IMPAIRED'|'VOICE_OVER' $BitstreamMode
 * @property 'CODING_MODE_1_0'|'CODING_MODE_1_1'|'CODING_MODE_2_0'|'CODING_MODE_3_2_LFE' $CodingMode
 * @property int $Dialnorm
 * @property 'FILM_STANDARD'|'NONE' $DrcProfile
 * @property 'DISABLED'|'ENABLED' $LfeFilter
 * @property 'FOLLOW_INPUT'|'USE_CONFIGURED' $MetadataControl
 * @property 'ATTENUATE_3_DB'|'NONE' $AttenuationControl
 */
class Ac3Settings extends Shape
{
    /**
     * @param array{
     *     Bitrate?: double,
     *     BitstreamMode?: 'COMMENTARY'|'COMPLETE_MAIN'|'DIALOGUE'|'EMERGENCY'|'HEARING_IMPAIRED'|'MUSIC_AND_EFFECTS'|'VISUALLY_IMPAIRED'|'VOICE_OVER',
     *     CodingMode?: 'CODING_MODE_1_0'|'CODING_MODE_1_1'|'CODING_MODE_2_0'|'CODING_MODE_3_2_LFE',
     *     Dialnorm?: int,
     *     DrcProfile?: 'FILM_STANDARD'|'NONE',
     *     LfeFilter?: 'DISABLED'|'ENABLED',
     *     MetadataControl?: 'FOLLOW_INPUT'|'USE_CONFIGURED',
     *     AttenuationControl?: 'ATTENUATE_3_DB'|'NONE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
