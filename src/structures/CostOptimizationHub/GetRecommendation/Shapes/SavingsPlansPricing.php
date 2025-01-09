<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $monthlySavingsPlansEligibleCost
 * @property double $estimatedMonthlyCommitment
 * @property double $savingsPercentage
 * @property double $estimatedOnDemandCost
 */
class SavingsPlansPricing extends Shape
{
    /**
     * @param array{
     *     monthlySavingsPlansEligibleCost?: double,
     *     estimatedMonthlyCommitment?: double,
     *     savingsPercentage?: double,
     *     estimatedOnDemandCost?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
