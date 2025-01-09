<?php

namespace Sunaoka\Aws\Structures\Ssm\RegisterTaskWithMaintenanceWindow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WindowId
 * @property list<Shapes\Target> $Targets
 * @property string $TaskArn
 * @property string $ServiceRoleArn
 * @property 'RUN_COMMAND'|'AUTOMATION'|'STEP_FUNCTIONS'|'LAMBDA' $TaskType
 * @property array<string, Shapes\MaintenanceWindowTaskParameterValueExpression> $TaskParameters
 * @property Shapes\MaintenanceWindowTaskInvocationParameters $TaskInvocationParameters
 * @property int $Priority
 * @property string $MaxConcurrency
 * @property string $MaxErrors
 * @property Shapes\LoggingInfo $LoggingInfo
 * @property string $Name
 * @property string $Description
 * @property string $ClientToken
 * @property 'CONTINUE_TASK'|'CANCEL_TASK' $CutoffBehavior
 * @property Shapes\AlarmConfiguration $AlarmConfiguration
 */
class RegisterTaskWithMaintenanceWindowRequest extends Request
{
    /**
     * @param array{
     *     WindowId: string,
     *     Targets?: list<Shapes\Target>,
     *     TaskArn: string,
     *     ServiceRoleArn?: string,
     *     TaskType: 'RUN_COMMAND'|'AUTOMATION'|'STEP_FUNCTIONS'|'LAMBDA',
     *     TaskParameters?: array<string, Shapes\MaintenanceWindowTaskParameterValueExpression>,
     *     TaskInvocationParameters?: Shapes\MaintenanceWindowTaskInvocationParameters,
     *     Priority?: int,
     *     MaxConcurrency?: string,
     *     MaxErrors?: string,
     *     LoggingInfo?: Shapes\LoggingInfo,
     *     Name?: string,
     *     Description?: string,
     *     ClientToken?: string,
     *     CutoffBehavior?: 'CONTINUE_TASK'|'CANCEL_TASK',
     *     AlarmConfiguration?: Shapes\AlarmConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
