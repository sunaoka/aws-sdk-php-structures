<?php

namespace Sunaoka\Aws\Structures\Ssm\GetMaintenanceWindowExecutionTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $WindowExecutionId
 * @property string $TaskExecutionId
 * @property string $TaskArn
 * @property string $ServiceRole
 * @property 'RUN_COMMAND'|'AUTOMATION'|'STEP_FUNCTIONS'|'LAMBDA' $Type
 * @property list<array<string, Shapes\MaintenanceWindowTaskParameterValueExpression>> $TaskParameters
 * @property int $Priority
 * @property string $MaxConcurrency
 * @property string $MaxErrors
 * @property 'PENDING'|'IN_PROGRESS'|'SUCCESS'|'FAILED'|'TIMED_OUT'|'CANCELLING'|'CANCELLED'|'SKIPPED_OVERLAPPING' $Status
 * @property string $StatusDetails
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property Shapes\AlarmConfiguration $AlarmConfiguration
 * @property list<Shapes\AlarmStateInformation> $TriggeredAlarms
 */
class GetMaintenanceWindowExecutionTaskResponse extends Response
{
}
