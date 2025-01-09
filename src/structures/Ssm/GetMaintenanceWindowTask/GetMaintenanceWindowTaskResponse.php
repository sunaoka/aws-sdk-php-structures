<?php

namespace Sunaoka\Aws\Structures\Ssm\GetMaintenanceWindowTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $WindowId
 * @property string $WindowTaskId
 * @property list<Shapes\Target> $Targets
 * @property string $TaskArn
 * @property string $ServiceRoleArn
 * @property 'RUN_COMMAND'|'AUTOMATION'|'STEP_FUNCTIONS'|'LAMBDA' $TaskType
 * @property array<string, Shapes\MaintenanceWindowTaskParameterValueExpression> $TaskParameters
 * @property Shapes\MaintenanceWindowTaskInvocationParameters $TaskInvocationParameters
 * @property int<0, max> $Priority
 * @property string $MaxConcurrency
 * @property string $MaxErrors
 * @property Shapes\LoggingInfo $LoggingInfo
 * @property string $Name
 * @property string $Description
 * @property 'CONTINUE_TASK'|'CANCEL_TASK' $CutoffBehavior
 * @property Shapes\AlarmConfiguration $AlarmConfiguration
 */
class GetMaintenanceWindowTaskResponse extends Response
{
}
