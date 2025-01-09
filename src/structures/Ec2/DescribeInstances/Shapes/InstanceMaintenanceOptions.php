<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'disabled'|'default' $AutoRecovery
 */
class InstanceMaintenanceOptions extends Shape
{
    /**
     * @param array{AutoRecovery?: 'disabled'|'default'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
