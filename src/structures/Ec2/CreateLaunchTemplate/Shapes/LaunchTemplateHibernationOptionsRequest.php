<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateLaunchTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Configured
 */
class LaunchTemplateHibernationOptionsRequest extends Shape
{
    /**
     * @param array{Configured?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
