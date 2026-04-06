<?php

namespace Sunaoka\Aws\Structures\Ec2\RequestSpotFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CpuPerformanceFactor|null $Cpu
 */
class BaselinePerformanceFactors extends Shape
{
    /**
     * @param array{Cpu?: CpuPerformanceFactor|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
