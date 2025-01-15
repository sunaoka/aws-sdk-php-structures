<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeStackSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DRIFTED'|'IN_SYNC'|'NOT_CHECKED'|null $DriftStatus
 * @property 'COMPLETED'|'FAILED'|'PARTIAL_SUCCESS'|'IN_PROGRESS'|'STOPPED'|null $DriftDetectionStatus
 * @property \Aws\Api\DateTimeResult|null $LastDriftCheckTimestamp
 * @property int<0, max>|null $TotalStackInstancesCount
 * @property int<0, max>|null $DriftedStackInstancesCount
 * @property int<0, max>|null $InSyncStackInstancesCount
 * @property int<0, max>|null $InProgressStackInstancesCount
 * @property int<0, max>|null $FailedStackInstancesCount
 */
class StackSetDriftDetectionDetails extends Shape
{
    /**
     * @param array{
     *     DriftStatus?: 'DRIFTED'|'IN_SYNC'|'NOT_CHECKED'|null,
     *     DriftDetectionStatus?: 'COMPLETED'|'FAILED'|'PARTIAL_SUCCESS'|'IN_PROGRESS'|'STOPPED'|null,
     *     LastDriftCheckTimestamp?: \Aws\Api\DateTimeResult|null,
     *     TotalStackInstancesCount?: int<0, max>|null,
     *     DriftedStackInstancesCount?: int<0, max>|null,
     *     InSyncStackInstancesCount?: int<0, max>|null,
     *     InProgressStackInstancesCount?: int<0, max>|null,
     *     FailedStackInstancesCount?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
