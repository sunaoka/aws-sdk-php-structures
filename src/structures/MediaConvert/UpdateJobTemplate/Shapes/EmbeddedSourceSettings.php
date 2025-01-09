<?php

namespace Sunaoka\Aws\Structures\MediaConvert\UpdateJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'UPCONVERT'|'DISABLED' $Convert608To708
 * @property int<1, 4> $Source608ChannelNumber
 * @property int<1, 1> $Source608TrackNumber
 * @property 'END_OF_INPUT'|'DISABLED' $TerminateCaptions
 */
class EmbeddedSourceSettings extends Shape
{
    /**
     * @param array{
     *     Convert608To708?: 'UPCONVERT'|'DISABLED',
     *     Source608ChannelNumber?: int<1, 4>,
     *     Source608TrackNumber?: int<1, 1>,
     *     TerminateCaptions?: 'END_OF_INPUT'|'DISABLED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
