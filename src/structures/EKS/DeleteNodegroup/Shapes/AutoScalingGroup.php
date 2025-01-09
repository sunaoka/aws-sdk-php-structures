<?php

namespace Sunaoka\Aws\Structures\EKS\DeleteNodegroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 */
class AutoScalingGroup extends Shape
{
    /**
     * @param array{name?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
