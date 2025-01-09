<?php

namespace Sunaoka\Aws\Structures\Ec2\GetSpotPlacementScores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CpuPerformanceFactorRequest $Cpu
 */
class BaselinePerformanceFactorsRequest extends Shape
{
    /**
     * @param array{Cpu?: CpuPerformanceFactorRequest} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
