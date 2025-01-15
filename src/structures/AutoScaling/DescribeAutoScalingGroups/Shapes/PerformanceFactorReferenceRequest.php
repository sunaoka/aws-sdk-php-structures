<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeAutoScalingGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InstanceFamily
 */
class PerformanceFactorReferenceRequest extends Shape
{
    /**
     * @param array{InstanceFamily?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
