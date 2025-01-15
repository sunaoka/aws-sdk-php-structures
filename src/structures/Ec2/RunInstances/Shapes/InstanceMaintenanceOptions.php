<?php

namespace Sunaoka\Aws\Structures\Ec2\RunInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'disabled'|'default'|null $AutoRecovery
 */
class InstanceMaintenanceOptions extends Shape
{
    /**
     * @param array{AutoRecovery?: 'disabled'|'default'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
