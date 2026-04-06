<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $Bitrate
 * @property 'CODING_MODE_5_1_4'|'CODING_MODE_7_1_4'|'CODING_MODE_9_1_6'|null $CodingMode
 * @property int<1, 31>|null $Dialnorm
 * @property 'FILM_LIGHT'|'FILM_STANDARD'|'MUSIC_LIGHT'|'MUSIC_STANDARD'|'NONE'|'SPEECH'|null $DrcLine
 * @property 'FILM_LIGHT'|'FILM_STANDARD'|'MUSIC_LIGHT'|'MUSIC_STANDARD'|'NONE'|'SPEECH'|null $DrcRf
 * @property double|null $HeightTrim
 * @property double|null $SurroundTrim
 */
class Eac3AtmosSettings extends Shape
{
    /**
     * @param array{
     *     Bitrate?: double|null,
     *     CodingMode?: 'CODING_MODE_5_1_4'|'CODING_MODE_7_1_4'|'CODING_MODE_9_1_6'|null,
     *     Dialnorm?: int<1, 31>|null,
     *     DrcLine?: 'FILM_LIGHT'|'FILM_STANDARD'|'MUSIC_LIGHT'|'MUSIC_STANDARD'|'NONE'|'SPEECH'|null,
     *     DrcRf?: 'FILM_LIGHT'|'FILM_STANDARD'|'MUSIC_LIGHT'|'MUSIC_STANDARD'|'NONE'|'SPEECH'|null,
     *     HeightTrim?: double|null,
     *     SurroundTrim?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
