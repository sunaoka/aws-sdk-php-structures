<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeStackSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DRIFTED'|'IN_SYNC'|'NOT_CHECKED' $DriftStatus
 * @property 'COMPLETED'|'FAILED'|'PARTIAL_SUCCESS'|'IN_PROGRESS'|'STOPPED' $DriftDetectionStatus
 * @property \Aws\Api\DateTimeResult $LastDriftCheckTimestamp
 * @property int<0, max> $TotalStackInstancesCount
 * @property int<0, max> $DriftedStackInstancesCount
 * @property int<0, max> $InSyncStackInstancesCount
 * @property int<0, max> $InProgressStackInstancesCount
 * @property int<0, max> $FailedStackInstancesCount
 */
class StackSetDriftDetectionDetails extends Shape
{
    /**
     * @param array{
     *     DriftStatus?: 'DRIFTED'|'IN_SYNC'|'NOT_CHECKED',
     *     DriftDetectionStatus?: 'COMPLETED'|'FAILED'|'PARTIAL_SUCCESS'|'IN_PROGRESS'|'STOPPED',
     *     LastDriftCheckTimestamp?: \Aws\Api\DateTimeResult,
     *     TotalStackInstancesCount?: int<0, max>,
     *     DriftedStackInstancesCount?: int<0, max>,
     *     InSyncStackInstancesCount?: int<0, max>,
     *     InProgressStackInstancesCount?: int<0, max>,
     *     FailedStackInstancesCount?: int<0, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
