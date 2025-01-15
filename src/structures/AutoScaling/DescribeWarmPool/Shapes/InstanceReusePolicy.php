<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeWarmPool\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $ReuseOnScaleIn
 */
class InstanceReusePolicy extends Shape
{
    /**
     * @param array{ReuseOnScaleIn?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
