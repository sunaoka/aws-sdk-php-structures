<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSpotFleetRequests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CpuPerformanceFactor $Cpu
 */
class BaselinePerformanceFactors extends Shape
{
    /**
     * @param array{Cpu?: CpuPerformanceFactor} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
