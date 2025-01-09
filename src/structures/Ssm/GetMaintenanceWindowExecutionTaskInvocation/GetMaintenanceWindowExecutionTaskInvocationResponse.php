<?php

namespace Sunaoka\Aws\Structures\Ssm\GetMaintenanceWindowExecutionTaskInvocation;

use Sunaoka\Aws\Structures\Response;

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
class GetMaintenanceWindowExecutionTaskInvocationResponse extends Response
{
}
