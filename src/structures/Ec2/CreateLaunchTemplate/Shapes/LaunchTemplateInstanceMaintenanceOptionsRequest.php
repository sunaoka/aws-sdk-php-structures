<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateLaunchTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'default'|'disabled'|null $AutoRecovery
 */
class LaunchTemplateInstanceMaintenanceOptionsRequest extends Shape
{
    /**
     * @param array{AutoRecovery?: 'default'|'disabled'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
