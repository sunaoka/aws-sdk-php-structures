<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $monthlySavingsPlansEligibleCost
 * @property double|null $estimatedMonthlyCommitment
 * @property double|null $savingsPercentage
 * @property double|null $estimatedOnDemandCost
 */
class SavingsPlansPricing extends Shape
{
    /**
     * @param array{
     *     monthlySavingsPlansEligibleCost?: double|null,
     *     estimatedMonthlyCommitment?: double|null,
     *     savingsPercentage?: double|null,
     *     estimatedOnDemandCost?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
