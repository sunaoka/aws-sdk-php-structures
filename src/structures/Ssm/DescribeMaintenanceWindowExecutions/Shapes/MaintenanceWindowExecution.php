<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeMaintenanceWindowExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $WindowId
 * @property string|null $WindowExecutionId
 * @property 'PENDING'|'IN_PROGRESS'|'SUCCESS'|'FAILED'|'TIMED_OUT'|'CANCELLING'|'CANCELLED'|'SKIPPED_OVERLAPPING'|null $Status
 * @property string|null $StatusDetails
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 */
class MaintenanceWindowExecution extends Shape
{
    /**
     * @param array{
     *     WindowId?: string|null,
     *     WindowExecutionId?: string|null,
     *     Status?: 'PENDING'|'IN_PROGRESS'|'SUCCESS'|'FAILED'|'TIMED_OUT'|'CANCELLING'|'CANCELLED'|'SKIPPED_OVERLAPPING'|null,
     *     StatusDetails?: string|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
