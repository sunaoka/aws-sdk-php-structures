<?php

namespace Sunaoka\Aws\Structures\Lambda\GetFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $ReservedConcurrentExecutions
 */
class Concurrency extends Shape
{
    /**
     * @param array{ReservedConcurrentExecutions?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
