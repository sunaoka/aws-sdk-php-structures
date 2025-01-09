<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeAutoScalingGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $ReuseOnScaleIn
 */
class InstanceReusePolicy extends Shape
{
    /**
     * @param array{ReuseOnScaleIn?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
