<?php

namespace Sunaoka\Aws\Structures\Lambda\UpdateEventSourceMapping\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $MaximumConcurrency
 */
class ScalingConfig extends Shape
{
    /**
     * @param array{MaximumConcurrency?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
