<?php

namespace Sunaoka\Aws\Structures\Ssm\GetMaintenanceWindowTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Input
 * @property string|null $Name
 */
class MaintenanceWindowStepFunctionsParameters extends Shape
{
    /**
     * @param array{
     *     Input?: string|null,
     *     Name?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
