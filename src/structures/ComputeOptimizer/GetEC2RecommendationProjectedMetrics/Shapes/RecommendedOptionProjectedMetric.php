<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetEC2RecommendationProjectedMetrics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $recommendedInstanceType
 * @property int|null $rank
 * @property list<ProjectedMetric>|null $projectedMetrics
 */
class RecommendedOptionProjectedMetric extends Shape
{
    /**
     * @param array{
     *     recommendedInstanceType?: string|null,
     *     rank?: int|null,
     *     projectedMetrics?: list<ProjectedMetric>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
