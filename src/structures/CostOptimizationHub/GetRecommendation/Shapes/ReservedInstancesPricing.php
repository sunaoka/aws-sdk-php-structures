<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $estimatedOnDemandCost
 * @property double $monthlyReservationEligibleCost
 * @property double $savingsPercentage
 * @property double $estimatedMonthlyAmortizedReservationCost
 */
class ReservedInstancesPricing extends Shape
{
    /**
     * @param array{
     *     estimatedOnDemandCost?: double,
     *     monthlyReservationEligibleCost?: double,
     *     savingsPercentage?: double,
     *     estimatedMonthlyAmortizedReservationCost?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
