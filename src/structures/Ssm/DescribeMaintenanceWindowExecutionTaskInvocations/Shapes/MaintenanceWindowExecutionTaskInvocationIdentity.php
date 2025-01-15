<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeMaintenanceWindowExecutionTaskInvocations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $WindowExecutionId
 * @property string|null $TaskExecutionId
 * @property string|null $InvocationId
 * @property string|null $ExecutionId
 * @property 'RUN_COMMAND'|'AUTOMATION'|'STEP_FUNCTIONS'|'LAMBDA'|null $TaskType
 * @property string|null $Parameters
 * @property 'PENDING'|'IN_PROGRESS'|'SUCCESS'|'FAILED'|'TIMED_OUT'|'CANCELLING'|'CANCELLED'|'SKIPPED_OVERLAPPING'|null $Status
 * @property string|null $StatusDetails
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property string|null $OwnerInformation
 * @property string|null $WindowTargetId
 */
class MaintenanceWindowExecutionTaskInvocationIdentity extends Shape
{
    /**
     * @param array{
     *     WindowExecutionId?: string|null,
     *     TaskExecutionId?: string|null,
     *     InvocationId?: string|null,
     *     ExecutionId?: string|null,
     *     TaskType?: 'RUN_COMMAND'|'AUTOMATION'|'STEP_FUNCTIONS'|'LAMBDA'|null,
     *     Parameters?: string|null,
     *     Status?: 'PENDING'|'IN_PROGRESS'|'SUCCESS'|'FAILED'|'TIMED_OUT'|'CANCELLING'|'CANCELLED'|'SKIPPED_OVERLAPPING'|null,
     *     StatusDetails?: string|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     OwnerInformation?: string|null,
     *     WindowTargetId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
