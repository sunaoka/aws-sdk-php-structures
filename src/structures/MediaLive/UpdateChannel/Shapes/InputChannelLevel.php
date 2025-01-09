<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<-60, 6> $Gain
 * @property int<0, 15> $InputChannel
 */
class InputChannelLevel extends Shape
{
    /**
     * @param array{
     *     Gain: int<-60, 6>,
     *     InputChannel: int<0, 15>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
