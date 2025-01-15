<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListStackSetOperations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $FailedStackInstancesCount
 */
class StackSetOperationStatusDetails extends Shape
{
    /**
     * @param array{FailedStackInstancesCount?: int<0, max>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
