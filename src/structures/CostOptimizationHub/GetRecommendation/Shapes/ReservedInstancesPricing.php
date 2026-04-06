<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $estimatedOnDemandCost
 * @property double|null $monthlyReservationEligibleCost
 * @property double|null $savingsPercentage
 * @property double|null $estimatedMonthlyAmortizedReservationCost
 */
class ReservedInstancesPricing extends Shape
{
    /**
     * @param array{
     *     estimatedOnDemandCost?: double|null,
     *     monthlyReservationEligibleCost?: double|null,
     *     savingsPercentage?: double|null,
     *     estimatedMonthlyAmortizedReservationCost?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
