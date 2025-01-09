<?php

namespace Sunaoka\Aws\Structures\Lambda\DeleteEventSourceMapping\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<2, 1000> $MaximumConcurrency
 */
class ScalingConfig extends Shape
{
    /**
     * @param array{MaximumConcurrency?: int<2, 1000>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
