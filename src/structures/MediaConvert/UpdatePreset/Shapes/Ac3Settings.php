<?php

namespace Sunaoka\Aws\Structures\MediaConvert\UpdatePreset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Bitrate
 * @property 'COMPLETE_MAIN'|'COMMENTARY'|'DIALOGUE'|'EMERGENCY'|'HEARING_IMPAIRED'|'MUSIC_AND_EFFECTS'|'VISUALLY_IMPAIRED'|'VOICE_OVER' $BitstreamMode
 * @property 'CODING_MODE_1_0'|'CODING_MODE_1_1'|'CODING_MODE_2_0'|'CODING_MODE_3_2_LFE' $CodingMode
 * @property int $Dialnorm
 * @property 'FILM_STANDARD'|'FILM_LIGHT'|'MUSIC_STANDARD'|'MUSIC_LIGHT'|'SPEECH'|'NONE' $DynamicRangeCompressionLine
 * @property 'FILM_STANDARD'|'NONE' $DynamicRangeCompressionProfile
 * @property 'FILM_STANDARD'|'FILM_LIGHT'|'MUSIC_STANDARD'|'MUSIC_LIGHT'|'SPEECH'|'NONE' $DynamicRangeCompressionRf
 * @property 'ENABLED'|'DISABLED' $LfeFilter
 * @property 'FOLLOW_INPUT'|'USE_CONFIGURED' $MetadataControl
 * @property int $SampleRate
 */
class Ac3Settings extends Shape
{
    /**
     * @param array{
     *     Bitrate?: int,
     *     BitstreamMode?: 'COMPLETE_MAIN'|'COMMENTARY'|'DIALOGUE'|'EMERGENCY'|'HEARING_IMPAIRED'|'MUSIC_AND_EFFECTS'|'VISUALLY_IMPAIRED'|'VOICE_OVER',
     *     CodingMode?: 'CODING_MODE_1_0'|'CODING_MODE_1_1'|'CODING_MODE_2_0'|'CODING_MODE_3_2_LFE',
     *     Dialnorm?: int,
     *     DynamicRangeCompressionLine?: 'FILM_STANDARD'|'FILM_LIGHT'|'MUSIC_STANDARD'|'MUSIC_LIGHT'|'SPEECH'|'NONE',
     *     DynamicRangeCompressionProfile?: 'FILM_STANDARD'|'NONE',
     *     DynamicRangeCompressionRf?: 'FILM_STANDARD'|'FILM_LIGHT'|'MUSIC_STANDARD'|'MUSIC_LIGHT'|'SPEECH'|'NONE',
     *     LfeFilter?: 'ENABLED'|'DISABLED',
     *     MetadataControl?: 'FOLLOW_INPUT'|'USE_CONFIGURED',
     *     SampleRate?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
