<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetECSServiceRecommendationProjectedMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $recommendedCpuUnits
 * @property int $recommendedMemorySize
 * @property list<ECSServiceProjectedMetric> $projectedMetrics
 */
class ECSServiceRecommendedOptionProjectedMetric extends Shape
{
    /**
     * @param array{
     *     recommendedCpuUnits?: int,
     *     recommendedMemorySize?: int,
     *     projectedMetrics?: list<ECSServiceProjectedMetric>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
