<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetIdleRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $savingsOpportunityPercentage
 * @property IdleEstimatedMonthlySavings|null $estimatedMonthlySavings
 */
class IdleSavingsOpportunityAfterDiscounts extends Shape
{
    /**
     * @param array{
     *     savingsOpportunityPercentage?: double|null,
     *     estimatedMonthlySavings?: IdleEstimatedMonthlySavings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
