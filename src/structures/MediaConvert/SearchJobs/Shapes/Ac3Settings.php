<?php

namespace Sunaoka\Aws\Structures\MediaConvert\SearchJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<64000, 640000> $Bitrate
 * @property 'COMPLETE_MAIN'|'COMMENTARY'|'DIALOGUE'|'EMERGENCY'|'HEARING_IMPAIRED'|'MUSIC_AND_EFFECTS'|'VISUALLY_IMPAIRED'|'VOICE_OVER' $BitstreamMode
 * @property 'CODING_MODE_1_0'|'CODING_MODE_1_1'|'CODING_MODE_2_0'|'CODING_MODE_3_2_LFE' $CodingMode
 * @property int<1, 31> $Dialnorm
 * @property 'FILM_STANDARD'|'FILM_LIGHT'|'MUSIC_STANDARD'|'MUSIC_LIGHT'|'SPEECH'|'NONE' $DynamicRangeCompressionLine
 * @property 'FILM_STANDARD'|'NONE' $DynamicRangeCompressionProfile
 * @property 'FILM_STANDARD'|'FILM_LIGHT'|'MUSIC_STANDARD'|'MUSIC_LIGHT'|'SPEECH'|'NONE' $DynamicRangeCompressionRf
 * @property 'ENABLED'|'DISABLED' $LfeFilter
 * @property 'FOLLOW_INPUT'|'USE_CONFIGURED' $MetadataControl
 * @property int<48000, 48000> $SampleRate
 */
class Ac3Settings extends Shape
{
    /**
     * @param array{
     *     Bitrate?: int<64000, 640000>,
     *     BitstreamMode?: 'COMPLETE_MAIN'|'COMMENTARY'|'DIALOGUE'|'EMERGENCY'|'HEARING_IMPAIRED'|'MUSIC_AND_EFFECTS'|'VISUALLY_IMPAIRED'|'VOICE_OVER',
     *     CodingMode?: 'CODING_MODE_1_0'|'CODING_MODE_1_1'|'CODING_MODE_2_0'|'CODING_MODE_3_2_LFE',
     *     Dialnorm?: int<1, 31>,
     *     DynamicRangeCompressionLine?: 'FILM_STANDARD'|'FILM_LIGHT'|'MUSIC_STANDARD'|'MUSIC_LIGHT'|'SPEECH'|'NONE',
     *     DynamicRangeCompressionProfile?: 'FILM_STANDARD'|'NONE',
     *     DynamicRangeCompressionRf?: 'FILM_STANDARD'|'FILM_LIGHT'|'MUSIC_STANDARD'|'MUSIC_LIGHT'|'SPEECH'|'NONE',
     *     LfeFilter?: 'ENABLED'|'DISABLED',
     *     MetadataControl?: 'FOLLOW_INPUT'|'USE_CONFIGURED',
     *     SampleRate?: int<48000, 48000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
