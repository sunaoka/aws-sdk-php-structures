<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'UPCONVERT'|'DISABLED'|null $Convert608To708
 * @property int<1, 4>|null $Source608ChannelNumber
 * @property int<1, 1>|null $Source608TrackNumber
 * @property 'END_OF_INPUT'|'DISABLED'|null $TerminateCaptions
 */
class EmbeddedSourceSettings extends Shape
{
    /**
     * @param array{
     *     Convert608To708?: 'UPCONVERT'|'DISABLED'|null,
     *     Source608ChannelNumber?: int<1, 4>|null,
     *     Source608TrackNumber?: int<1, 1>|null,
     *     TerminateCaptions?: 'END_OF_INPUT'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
