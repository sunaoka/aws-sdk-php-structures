<?php

namespace Sunaoka\Aws\Structures\Ssm\GetMaintenanceWindowExecutionTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $WindowExecutionId
 * @property string|null $TaskExecutionId
 * @property string|null $TaskArn
 * @property string|null $ServiceRole
 * @property 'RUN_COMMAND'|'AUTOMATION'|'STEP_FUNCTIONS'|'LAMBDA'|null $Type
 * @property list<array<string, Shapes\MaintenanceWindowTaskParameterValueExpression>>|null $TaskParameters
 * @property int<0, max>|null $Priority
 * @property string|null $MaxConcurrency
 * @property string|null $MaxErrors
 * @property 'PENDING'|'IN_PROGRESS'|'SUCCESS'|'FAILED'|'TIMED_OUT'|'CANCELLING'|'CANCELLED'|'SKIPPED_OVERLAPPING'|null $Status
 * @property string|null $StatusDetails
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property Shapes\AlarmConfiguration|null $AlarmConfiguration
 * @property list<Shapes\AlarmStateInformation>|null $TriggeredAlarms
 */
class GetMaintenanceWindowExecutionTaskResponse extends Response
{
}
