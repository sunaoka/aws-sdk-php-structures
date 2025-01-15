<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdateMaintenanceWindowTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Values
 */
class MaintenanceWindowTaskParameterValueExpression extends Shape
{
    /**
     * @param array{Values?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
