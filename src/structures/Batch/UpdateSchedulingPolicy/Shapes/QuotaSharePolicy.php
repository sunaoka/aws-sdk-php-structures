<?php

namespace Sunaoka\Aws\Structures\Batch\UpdateSchedulingPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FIFO' $idleResourceAssignmentStrategy
 */
class QuotaSharePolicy extends Shape
{
    /**
     * @param array{idleResourceAssignmentStrategy: 'FIFO'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
