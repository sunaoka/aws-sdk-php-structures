<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateLaunchTemplateVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Configured
 */
class LaunchTemplateHibernationOptions extends Shape
{
    /**
     * @param array{Configured?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
