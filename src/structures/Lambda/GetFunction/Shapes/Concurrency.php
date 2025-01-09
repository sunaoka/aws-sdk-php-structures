<?php

namespace Sunaoka\Aws\Structures\Lambda\GetFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $ReservedConcurrentExecutions
 */
class Concurrency extends Shape
{
    /**
     * @param array{ReservedConcurrentExecutions?: int<0, max>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
