<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Configured
 */
class HibernationOptions extends Shape
{
    /**
     * @param array{Configured?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
