<?php

namespace Sunaoka\Aws\Structures\TrustedAdvisor\ListOrganizationRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RecommendationCostOptimizingAggregates $costOptimizing
 */
class RecommendationPillarSpecificAggregates extends Shape
{
    /**
     * @param array{costOptimizing?: RecommendationCostOptimizingAggregates} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
