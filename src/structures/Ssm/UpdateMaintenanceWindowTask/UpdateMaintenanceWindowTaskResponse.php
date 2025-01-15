<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdateMaintenanceWindowTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $WindowId
 * @property string|null $WindowTaskId
 * @property list<Shapes\Target>|null $Targets
 * @property string|null $TaskArn
 * @property string|null $ServiceRoleArn
 * @property array<string, Shapes\MaintenanceWindowTaskParameterValueExpression>|null $TaskParameters
 * @property Shapes\MaintenanceWindowTaskInvocationParameters|null $TaskInvocationParameters
 * @property int<0, max>|null $Priority
 * @property string|null $MaxConcurrency
 * @property string|null $MaxErrors
 * @property Shapes\LoggingInfo|null $LoggingInfo
 * @property string|null $Name
 * @property string|null $Description
 * @property 'CONTINUE_TASK'|'CANCEL_TASK'|null $CutoffBehavior
 * @property Shapes\AlarmConfiguration|null $AlarmConfiguration
 */
class UpdateMaintenanceWindowTaskResponse extends Response
{
}
