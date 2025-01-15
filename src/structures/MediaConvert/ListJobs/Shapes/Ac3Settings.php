<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<64000, 640000>|null $Bitrate
 * @property 'COMPLETE_MAIN'|'COMMENTARY'|'DIALOGUE'|'EMERGENCY'|'HEARING_IMPAIRED'|'MUSIC_AND_EFFECTS'|'VISUALLY_IMPAIRED'|'VOICE_OVER'|null $BitstreamMode
 * @property 'CODING_MODE_1_0'|'CODING_MODE_1_1'|'CODING_MODE_2_0'|'CODING_MODE_3_2_LFE'|null $CodingMode
 * @property int<1, 31>|null $Dialnorm
 * @property 'FILM_STANDARD'|'FILM_LIGHT'|'MUSIC_STANDARD'|'MUSIC_LIGHT'|'SPEECH'|'NONE'|null $DynamicRangeCompressionLine
 * @property 'FILM_STANDARD'|'NONE'|null $DynamicRangeCompressionProfile
 * @property 'FILM_STANDARD'|'FILM_LIGHT'|'MUSIC_STANDARD'|'MUSIC_LIGHT'|'SPEECH'|'NONE'|null $DynamicRangeCompressionRf
 * @property 'ENABLED'|'DISABLED'|null $LfeFilter
 * @property 'FOLLOW_INPUT'|'USE_CONFIGURED'|null $MetadataControl
 * @property int<48000, 48000>|null $SampleRate
 */
class Ac3Settings extends Shape
{
    /**
     * @param array{
     *     Bitrate?: int<64000, 640000>|null,
     *     BitstreamMode?: 'COMPLETE_MAIN'|'COMMENTARY'|'DIALOGUE'|'EMERGENCY'|'HEARING_IMPAIRED'|'MUSIC_AND_EFFECTS'|'VISUALLY_IMPAIRED'|'VOICE_OVER'|null,
     *     CodingMode?: 'CODING_MODE_1_0'|'CODING_MODE_1_1'|'CODING_MODE_2_0'|'CODING_MODE_3_2_LFE'|null,
     *     Dialnorm?: int<1, 31>|null,
     *     DynamicRangeCompressionLine?: 'FILM_STANDARD'|'FILM_LIGHT'|'MUSIC_STANDARD'|'MUSIC_LIGHT'|'SPEECH'|'NONE'|null,
     *     DynamicRangeCompressionProfile?: 'FILM_STANDARD'|'NONE'|null,
     *     DynamicRangeCompressionRf?: 'FILM_STANDARD'|'FILM_LIGHT'|'MUSIC_STANDARD'|'MUSIC_LIGHT'|'SPEECH'|'NONE'|null,
     *     LfeFilter?: 'ENABLED'|'DISABLED'|null,
     *     MetadataControl?: 'FOLLOW_INPUT'|'USE_CONFIGURED'|null,
     *     SampleRate?: int<48000, 48000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
