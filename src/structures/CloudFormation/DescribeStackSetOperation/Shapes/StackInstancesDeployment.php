<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeStackSetOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PENDING'|'NOT_APPLICABLE'|'NOT_STARTED'|'IN_PROGRESS'|'SUCCEEDED'|'PARTIAL_SUCCESS'|'FAILED'|null $Status
 * @property int<0, max>|null $SucceededStackInstancesCount
 * @property int<0, max>|null $FailedStackInstancesCount
 * @property int<0, max>|null $CompletedStackInstancesCount
 * @property int<0, max>|null $PendingStackInstancesCount
 * @property int<0, max>|null $CancelledStackInstancesCount
 * @property int<0, max>|null $SkippedStackInstancesCount
 * @property double|null $PercentageCompleted
 */
class StackInstancesDeployment extends Shape
{
    /**
     * @param array{
     *     Status?: 'PENDING'|'NOT_APPLICABLE'|'NOT_STARTED'|'IN_PROGRESS'|'SUCCEEDED'|'PARTIAL_SUCCESS'|'FAILED'|null,
     *     SucceededStackInstancesCount?: int<0, max>|null,
     *     FailedStackInstancesCount?: int<0, max>|null,
     *     CompletedStackInstancesCount?: int<0, max>|null,
     *     PendingStackInstancesCount?: int<0, max>|null,
     *     CancelledStackInstancesCount?: int<0, max>|null,
     *     SkippedStackInstancesCount?: int<0, max>|null,
     *     PercentageCompleted?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
