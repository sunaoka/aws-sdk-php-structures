<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateLaunchTemplateVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'default'|'disabled'|null $AutoRecovery
 */
class LaunchTemplateInstanceMaintenanceOptions extends Shape
{
    /**
     * @param array{AutoRecovery?: 'default'|'disabled'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
