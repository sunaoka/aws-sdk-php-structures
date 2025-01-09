<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeStackSetOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DRIFTED'|'IN_SYNC'|'NOT_CHECKED' $DriftStatus
 * @property 'COMPLETED'|'FAILED'|'PARTIAL_SUCCESS'|'IN_PROGRESS'|'STOPPED' $DriftDetectionStatus
 * @property \Aws\Api\DateTimeResult $LastDriftCheckTimestamp
 * @property int $TotalStackInstancesCount
 * @property int $DriftedStackInstancesCount
 * @property int $InSyncStackInstancesCount
 * @property int $InProgressStackInstancesCount
 * @property int $FailedStackInstancesCount
 */
class StackSetDriftDetectionDetails extends Shape
{
    /**
     * @param array{
     *     DriftStatus?: 'DRIFTED'|'IN_SYNC'|'NOT_CHECKED',
     *     DriftDetectionStatus?: 'COMPLETED'|'FAILED'|'PARTIAL_SUCCESS'|'IN_PROGRESS'|'STOPPED',
     *     LastDriftCheckTimestamp?: \Aws\Api\DateTimeResult,
     *     TotalStackInstancesCount?: int,
     *     DriftedStackInstancesCount?: int,
     *     InSyncStackInstancesCount?: int,
     *     InProgressStackInstancesCount?: int,
     *     FailedStackInstancesCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
