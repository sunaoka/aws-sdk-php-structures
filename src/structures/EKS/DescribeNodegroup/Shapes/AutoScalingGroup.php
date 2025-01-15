<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeNodegroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 */
class AutoScalingGroup extends Shape
{
    /**
     * @param array{name?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
