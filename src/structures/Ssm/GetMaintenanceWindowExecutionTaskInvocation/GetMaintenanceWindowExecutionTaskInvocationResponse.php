<?php

namespace Sunaoka\Aws\Structures\Ssm\GetMaintenanceWindowExecutionTaskInvocation;

use Sunaoka\Aws\Structures\Response;

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
class GetMaintenanceWindowExecutionTaskInvocationResponse extends Response
{
}
