<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeMaintenanceWindowTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $WindowId
 * @property string|null $WindowTaskId
 * @property string|null $TaskArn
 * @property 'RUN_COMMAND'|'AUTOMATION'|'STEP_FUNCTIONS'|'LAMBDA'|null $Type
 * @property list<Target>|null $Targets
 * @property array<string, MaintenanceWindowTaskParameterValueExpression>|null $TaskParameters
 * @property int<0, max>|null $Priority
 * @property LoggingInfo|null $LoggingInfo
 * @property string|null $ServiceRoleArn
 * @property string|null $MaxConcurrency
 * @property string|null $MaxErrors
 * @property string|null $Name
 * @property string|null $Description
 * @property 'CONTINUE_TASK'|'CANCEL_TASK'|null $CutoffBehavior
 * @property AlarmConfiguration|null $AlarmConfiguration
 */
class MaintenanceWindowTask extends Shape
{
    /**
     * @param array{
     *     WindowId?: string|null,
     *     WindowTaskId?: string|null,
     *     TaskArn?: string|null,
     *     Type?: 'RUN_COMMAND'|'AUTOMATION'|'STEP_FUNCTIONS'|'LAMBDA'|null,
     *     Targets?: list<Target>|null,
     *     TaskParameters?: array<string, MaintenanceWindowTaskParameterValueExpression>|null,
     *     Priority?: int<0, max>|null,
     *     LoggingInfo?: LoggingInfo|null,
     *     ServiceRoleArn?: string|null,
     *     MaxConcurrency?: string|null,
     *     MaxErrors?: string|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     CutoffBehavior?: 'CONTINUE_TASK'|'CANCEL_TASK'|null,
     *     AlarmConfiguration?: AlarmConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
