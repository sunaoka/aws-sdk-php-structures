<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeMaintenanceWindowExecutionTaskInvocations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WindowExecutionId
 * @property string $TaskExecutionId
 * @property string $InvocationId
 * @property string $ExecutionId
 * @property 'RUN_COMMAND'|'AUTOMATION'|'STEP_FUNCTIONS'|'LAMBDA' $TaskType
 * @property string $Parameters
 * @property 'PENDING'|'IN_PROGRESS'|'SUCCESS'|'FAILED'|'TIMED_OUT'|'CANCELLING'|'CANCELLED'|'SKIPPED_OVERLAPPING' $Status
 * @property string $StatusDetails
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property string $OwnerInformation
 * @property string $WindowTargetId
 */
class MaintenanceWindowExecutionTaskInvocationIdentity extends Shape
{
    /**
     * @param array{
     *     WindowExecutionId?: string,
     *     TaskExecutionId?: string,
     *     InvocationId?: string,
     *     ExecutionId?: string,
     *     TaskType?: 'RUN_COMMAND'|'AUTOMATION'|'STEP_FUNCTIONS'|'LAMBDA',
     *     Parameters?: string,
     *     Status?: 'PENDING'|'IN_PROGRESS'|'SUCCESS'|'FAILED'|'TIMED_OUT'|'CANCELLING'|'CANCELLED'|'SKIPPED_OVERLAPPING',
     *     StatusDetails?: string,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     OwnerInformation?: string,
     *     WindowTargetId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
