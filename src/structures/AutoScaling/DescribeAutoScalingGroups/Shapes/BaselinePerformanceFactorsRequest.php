<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeAutoScalingGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CpuPerformanceFactorRequest|null $Cpu
 */
class BaselinePerformanceFactorsRequest extends Shape
{
    /**
     * @param array{Cpu?: CpuPerformanceFactorRequest|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
