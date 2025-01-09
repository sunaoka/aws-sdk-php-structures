<?php

namespace Sunaoka\Aws\Structures\MediaLive\RestartChannelPipelines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $Bitrate
 * @property 'CODING_MODE_5_1_4'|'CODING_MODE_7_1_4'|'CODING_MODE_9_1_6' $CodingMode
 * @property int<1, 31> $Dialnorm
 * @property 'FILM_LIGHT'|'FILM_STANDARD'|'MUSIC_LIGHT'|'MUSIC_STANDARD'|'NONE'|'SPEECH' $DrcLine
 * @property 'FILM_LIGHT'|'FILM_STANDARD'|'MUSIC_LIGHT'|'MUSIC_STANDARD'|'NONE'|'SPEECH' $DrcRf
 * @property double $HeightTrim
 * @property double $SurroundTrim
 */
class Eac3AtmosSettings extends Shape
{
    /**
     * @param array{
     *     Bitrate?: double,
     *     CodingMode?: 'CODING_MODE_5_1_4'|'CODING_MODE_7_1_4'|'CODING_MODE_9_1_6',
     *     Dialnorm?: int<1, 31>,
     *     DrcLine?: 'FILM_LIGHT'|'FILM_STANDARD'|'MUSIC_LIGHT'|'MUSIC_STANDARD'|'NONE'|'SPEECH',
     *     DrcRf?: 'FILM_LIGHT'|'FILM_STANDARD'|'MUSIC_LIGHT'|'MUSIC_STANDARD'|'NONE'|'SPEECH',
     *     HeightTrim?: double,
     *     SurroundTrim?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
