<?php

namespace Sunaoka\Aws\Structures\Ssm\GetMaintenanceWindowTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Input
 * @property string $Name
 */
class MaintenanceWindowStepFunctionsParameters extends Shape
{
    /**
     * @param array{
     *     Input?: string,
     *     Name?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
