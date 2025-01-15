<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetECSServiceRecommendationProjectedMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $recommendedCpuUnits
 * @property int|null $recommendedMemorySize
 * @property list<ECSServiceProjectedMetric>|null $projectedMetrics
 */
class ECSServiceRecommendedOptionProjectedMetric extends Shape
{
    /**
     * @param array{
     *     recommendedCpuUnits?: int|null,
     *     recommendedMemorySize?: int|null,
     *     projectedMetrics?: list<ECSServiceProjectedMetric>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
