<?php

namespace Sunaoka\Aws\Structures\TrustedAdvisor\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RecommendationCostOptimizingAggregates|null $costOptimizing
 */
class RecommendationPillarSpecificAggregates extends Shape
{
    /**
     * @param array{costOptimizing?: RecommendationCostOptimizingAggregates|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
