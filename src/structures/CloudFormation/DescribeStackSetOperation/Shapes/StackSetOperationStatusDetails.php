<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeStackSetOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $FailedStackInstancesCount
 */
class StackSetOperationStatusDetails extends Shape
{
    /**
     * @param array{FailedStackInstancesCount?: int<0, max>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
