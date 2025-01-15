<?php

namespace Sunaoka\Aws\Structures\Ssm\RegisterTaskWithMaintenanceWindow;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $WindowId
 * @property list<Shapes\Target>|null $Targets
 * @property string $TaskArn
 * @property string|null $ServiceRoleArn
 * @property 'RUN_COMMAND'|'AUTOMATION'|'STEP_FUNCTIONS'|'LAMBDA' $TaskType
 * @property array<string, Shapes\MaintenanceWindowTaskParameterValueExpression>|null $TaskParameters
 * @property Shapes\MaintenanceWindowTaskInvocationParameters|null $TaskInvocationParameters
 * @property int<0, max>|null $Priority
 * @property string|null $MaxConcurrency
 * @property string|null $MaxErrors
 * @property Shapes\LoggingInfo|null $LoggingInfo
 * @property string|null $Name
 * @property string|null $Description
 * @property string|null $ClientToken
 * @property 'CONTINUE_TASK'|'CANCEL_TASK'|null $CutoffBehavior
 * @property Shapes\AlarmConfiguration|null $AlarmConfiguration
 */
class RegisterTaskWithMaintenanceWindowRequest extends Request
{
    /**
     * @param array{
     *     WindowId: string,
     *     Targets?: list<Shapes\Target>|null,
     *     TaskArn: string,
     *     ServiceRoleArn?: string|null,
     *     TaskType: 'RUN_COMMAND'|'AUTOMATION'|'STEP_FUNCTIONS'|'LAMBDA',
     *     TaskParameters?: array<string, Shapes\MaintenanceWindowTaskParameterValueExpression>|null,
     *     TaskInvocationParameters?: Shapes\MaintenanceWindowTaskInvocationParameters|null,
     *     Priority?: int<0, max>|null,
     *     MaxConcurrency?: string|null,
     *     MaxErrors?: string|null,
     *     LoggingInfo?: Shapes\LoggingInfo|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     ClientToken?: string|null,
     *     CutoffBehavior?: 'CONTINUE_TASK'|'CANCEL_TASK'|null,
     *     AlarmConfiguration?: Shapes\AlarmConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
