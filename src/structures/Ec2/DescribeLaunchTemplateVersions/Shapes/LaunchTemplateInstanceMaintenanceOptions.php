<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeLaunchTemplateVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'default'|'disabled' $AutoRecovery
 */
class LaunchTemplateInstanceMaintenanceOptions extends Shape
{
    /**
     * @param array{AutoRecovery?: 'default'|'disabled'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
