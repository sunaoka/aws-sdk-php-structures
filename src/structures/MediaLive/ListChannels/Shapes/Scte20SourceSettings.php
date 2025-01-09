<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListChannels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'UPCONVERT' $Convert608To708
 * @property int<1, 4> $Source608ChannelNumber
 */
class Scte20SourceSettings extends Shape
{
    /**
     * @param array{
     *     Convert608To708?: 'DISABLED'|'UPCONVERT',
     *     Source608ChannelNumber?: int<1, 4>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
