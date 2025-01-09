<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdateMaintenanceWindowTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $WindowId
 * @property string $WindowTaskId
 * @property list<Shapes\Target> $Targets
 * @property string $TaskArn
 * @property string $ServiceRoleArn
 * @property array<string, Shapes\MaintenanceWindowTaskParameterValueExpression> $TaskParameters
 * @property Shapes\MaintenanceWindowTaskInvocationParameters $TaskInvocationParameters
 * @property int $Priority
 * @property string $MaxConcurrency
 * @property string $MaxErrors
 * @property Shapes\LoggingInfo $LoggingInfo
 * @property string $Name
 * @property string $Description
 * @property 'CONTINUE_TASK'|'CANCEL_TASK' $CutoffBehavior
 * @property Shapes\AlarmConfiguration $AlarmConfiguration
 */
class UpdateMaintenanceWindowTaskResponse extends Response
{
}
