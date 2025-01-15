<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdateMaintenanceWindowTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WindowId
 * @property string $WindowTaskId
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
 * @property bool|null $Replace
 * @property 'CONTINUE_TASK'|'CANCEL_TASK'|null $CutoffBehavior
 * @property Shapes\AlarmConfiguration|null $AlarmConfiguration
 */
class UpdateMaintenanceWindowTaskRequest extends Request
{
    /**
     * @param array{
     *     WindowId: string,
     *     WindowTaskId: string,
     *     Targets?: list<Shapes\Target>|null,
     *     TaskArn?: string|null,
     *     ServiceRoleArn?: string|null,
     *     TaskParameters?: array<string, Shapes\MaintenanceWindowTaskParameterValueExpression>|null,
     *     TaskInvocationParameters?: Shapes\MaintenanceWindowTaskInvocationParameters|null,
     *     Priority?: int<0, max>|null,
     *     MaxConcurrency?: string|null,
     *     MaxErrors?: string|null,
     *     LoggingInfo?: Shapes\LoggingInfo|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     Replace?: bool|null,
     *     CutoffBehavior?: 'CONTINUE_TASK'|'CANCEL_TASK'|null,
     *     AlarmConfiguration?: Shapes\AlarmConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
