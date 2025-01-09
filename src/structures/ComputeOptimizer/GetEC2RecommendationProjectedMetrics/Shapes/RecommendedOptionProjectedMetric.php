<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetEC2RecommendationProjectedMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $recommendedInstanceType
 * @property int $rank
 * @property list<ProjectedMetric> $projectedMetrics
 */
class RecommendedOptionProjectedMetric extends Shape
{
    /**
     * @param array{
     *     recommendedInstanceType?: string,
     *     rank?: int,
     *     projectedMetrics?: list<ProjectedMetric>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
