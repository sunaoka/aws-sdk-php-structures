<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeInstanceRefreshes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceFamily
 */
class PerformanceFactorReferenceRequest extends Shape
{
    /**
     * @param array{InstanceFamily?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
