<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobQueues\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $order
 * @property string $computeEnvironment
 */
class ComputeEnvironmentOrder extends Shape
{
    /**
     * @param array{
     *     order: int,
     *     computeEnvironment: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
