<?php

namespace Sunaoka\Aws\Structures\MediaLive\CreateChannel\Shapes;

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
