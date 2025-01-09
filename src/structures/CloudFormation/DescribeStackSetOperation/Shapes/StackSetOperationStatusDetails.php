<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeStackSetOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $FailedStackInstancesCount
 */
class StackSetOperationStatusDetails extends Shape
{
    /**
     * @param array{FailedStackInstancesCount?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
