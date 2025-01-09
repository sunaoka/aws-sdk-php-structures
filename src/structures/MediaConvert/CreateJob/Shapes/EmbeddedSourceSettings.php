<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'UPCONVERT'|'DISABLED' $Convert608To708
 * @property int $Source608ChannelNumber
 * @property int $Source608TrackNumber
 * @property 'END_OF_INPUT'|'DISABLED' $TerminateCaptions
 */
class EmbeddedSourceSettings extends Shape
{
    /**
     * @param array{
     *     Convert608To708?: 'UPCONVERT'|'DISABLED',
     *     Source608ChannelNumber?: int,
     *     Source608TrackNumber?: int,
     *     TerminateCaptions?: 'END_OF_INPUT'|'DISABLED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
