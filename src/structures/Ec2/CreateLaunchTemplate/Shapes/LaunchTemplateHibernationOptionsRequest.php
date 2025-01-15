<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateLaunchTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Configured
 */
class LaunchTemplateHibernationOptionsRequest extends Shape
{
    /**
     * @param array{Configured?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
