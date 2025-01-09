<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdateMaintenanceWindowTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WindowId
 * @property string $WindowTaskId
 * @property list<Shapes\Target> $Targets
 * @property string $TaskArn
 * @property string $ServiceRoleArn
 * @property array<string, Shapes\MaintenanceWindowTaskParameterValueExpression> $TaskParameters
 * @property Shapes\MaintenanceWindowTaskInvocationParameters $TaskInvocationParameters
 * @property int<0, max> $Priority
 * @property string $MaxConcurrency
 * @property string $MaxErrors
 * @property Shapes\LoggingInfo $LoggingInfo
 * @property string $Name
 * @property string $Description
 * @property bool $Replace
 * @property 'CONTINUE_TASK'|'CANCEL_TASK' $CutoffBehavior
 * @property Shapes\AlarmConfiguration $AlarmConfiguration
 */
class UpdateMaintenanceWindowTaskRequest extends Request
{
    /**
     * @param array{
     *     WindowId: string,
     *     WindowTaskId: string,
     *     Targets?: list<Shapes\Target>,
     *     TaskArn?: string,
     *     ServiceRoleArn?: string,
     *     TaskParameters?: array<string, Shapes\MaintenanceWindowTaskParameterValueExpression>,
     *     TaskInvocationParameters?: Shapes\MaintenanceWindowTaskInvocationParameters,
     *     Priority?: int<0, max>,
     *     MaxConcurrency?: string,
     *     MaxErrors?: string,
     *     LoggingInfo?: Shapes\LoggingInfo,
     *     Name?: string,
     *     Description?: string,
     *     Replace?: bool,
     *     CutoffBehavior?: 'CONTINUE_TASK'|'CANCEL_TASK',
     *     AlarmConfiguration?: Shapes\AlarmConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
