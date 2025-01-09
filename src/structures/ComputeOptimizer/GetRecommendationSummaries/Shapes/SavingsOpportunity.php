<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetRecommendationSummaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $savingsOpportunityPercentage
 * @property EstimatedMonthlySavings $estimatedMonthlySavings
 */
class SavingsOpportunity extends Shape
{
    /**
     * @param array{
     *     savingsOpportunityPercentage?: double,
     *     estimatedMonthlySavings?: EstimatedMonthlySavings
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
