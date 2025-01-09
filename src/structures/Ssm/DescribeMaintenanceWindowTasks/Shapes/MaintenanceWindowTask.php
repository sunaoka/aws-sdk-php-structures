<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeMaintenanceWindowTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WindowId
 * @property string $WindowTaskId
 * @property string $TaskArn
 * @property 'RUN_COMMAND'|'AUTOMATION'|'STEP_FUNCTIONS'|'LAMBDA' $Type
 * @property list<Target> $Targets
 * @property array<string, MaintenanceWindowTaskParameterValueExpression> $TaskParameters
 * @property int $Priority
 * @property LoggingInfo $LoggingInfo
 * @property string $ServiceRoleArn
 * @property string $MaxConcurrency
 * @property string $MaxErrors
 * @property string $Name
 * @property string $Description
 * @property 'CONTINUE_TASK'|'CANCEL_TASK' $CutoffBehavior
 * @property AlarmConfiguration $AlarmConfiguration
 */
class MaintenanceWindowTask extends Shape
{
    /**
     * @param array{
     *     WindowId?: string,
     *     WindowTaskId?: string,
     *     TaskArn?: string,
     *     Type?: 'RUN_COMMAND'|'AUTOMATION'|'STEP_FUNCTIONS'|'LAMBDA',
     *     Targets?: list<Target>,
     *     TaskParameters?: array<string, MaintenanceWindowTaskParameterValueExpression>,
     *     Priority?: int,
     *     LoggingInfo?: LoggingInfo,
     *     ServiceRoleArn?: string,
     *     MaxConcurrency?: string,
     *     MaxErrors?: string,
     *     Name?: string,
     *     Description?: string,
     *     CutoffBehavior?: 'CONTINUE_TASK'|'CANCEL_TASK',
     *     AlarmConfiguration?: AlarmConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
