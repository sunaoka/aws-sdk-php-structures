<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeMaintenanceWindowExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WindowId
 * @property string $WindowExecutionId
 * @property 'PENDING'|'IN_PROGRESS'|'SUCCESS'|'FAILED'|'TIMED_OUT'|'CANCELLING'|'CANCELLED'|'SKIPPED_OVERLAPPING' $Status
 * @property string $StatusDetails
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 */
class MaintenanceWindowExecution extends Shape
{
    /**
     * @param array{
     *     WindowId?: string,
     *     WindowExecutionId?: string,
     *     Status?: 'PENDING'|'IN_PROGRESS'|'SUCCESS'|'FAILED'|'TIMED_OUT'|'CANCELLING'|'CANCELLED'|'SKIPPED_OVERLAPPING',
     *     StatusDetails?: string,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
