<?php

namespace Sunaoka\Aws\Structures\TrustedAdvisor\GetOrganizationRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $estimatedMonthlySavings
 * @property double $estimatedPercentMonthlySavings
 */
class RecommendationCostOptimizingAggregates extends Shape
{
    /**
     * @param array{
     *     estimatedMonthlySavings: double,
     *     estimatedPercentMonthlySavings: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
