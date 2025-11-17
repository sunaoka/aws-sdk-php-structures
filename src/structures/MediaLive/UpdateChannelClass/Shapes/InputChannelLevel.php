<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannelClass\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Gain
 * @property int $InputChannel
 */
class InputChannelLevel extends Shape
{
    /**
     * @param array{
     *     Gain: int,
     *     InputChannel: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
