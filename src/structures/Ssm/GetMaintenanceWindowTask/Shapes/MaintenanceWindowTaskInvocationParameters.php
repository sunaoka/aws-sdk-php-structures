<?php

namespace Sunaoka\Aws\Structures\Ssm\GetMaintenanceWindowTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MaintenanceWindowRunCommandParameters|null $RunCommand
 * @property MaintenanceWindowAutomationParameters|null $Automation
 * @property MaintenanceWindowStepFunctionsParameters|null $StepFunctions
 * @property MaintenanceWindowLambdaParameters|null $Lambda
 */
class MaintenanceWindowTaskInvocationParameters extends Shape
{
    /**
     * @param array{
     *     RunCommand?: MaintenanceWindowRunCommandParameters|null,
     *     Automation?: MaintenanceWindowAutomationParameters|null,
     *     StepFunctions?: MaintenanceWindowStepFunctionsParameters|null,
     *     Lambda?: MaintenanceWindowLambdaParameters|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
