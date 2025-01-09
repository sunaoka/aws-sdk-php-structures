<?php

namespace Sunaoka\Aws\Structures\Ssm\GetMaintenanceWindowTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MaintenanceWindowRunCommandParameters $RunCommand
 * @property MaintenanceWindowAutomationParameters $Automation
 * @property MaintenanceWindowStepFunctionsParameters $StepFunctions
 * @property MaintenanceWindowLambdaParameters $Lambda
 */
class MaintenanceWindowTaskInvocationParameters extends Shape
{
    /**
     * @param array{
     *     RunCommand?: MaintenanceWindowRunCommandParameters,
     *     Automation?: MaintenanceWindowAutomationParameters,
     *     StepFunctions?: MaintenanceWindowStepFunctionsParameters,
     *     Lambda?: MaintenanceWindowLambdaParameters
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
