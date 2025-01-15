<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeLaunchTemplateVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Configured
 */
class LaunchTemplateHibernationOptions extends Shape
{
    /**
     * @param array{Configured?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
