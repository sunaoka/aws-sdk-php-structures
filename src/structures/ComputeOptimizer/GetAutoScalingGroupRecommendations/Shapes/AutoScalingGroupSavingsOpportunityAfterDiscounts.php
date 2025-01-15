<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetAutoScalingGroupRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $savingsOpportunityPercentage
 * @property AutoScalingGroupEstimatedMonthlySavings|null $estimatedMonthlySavings
 */
class AutoScalingGroupSavingsOpportunityAfterDiscounts extends Shape
{
    /**
     * @param array{
     *     savingsOpportunityPercentage?: double|null,
     *     estimatedMonthlySavings?: AutoScalingGroupEstimatedMonthlySavings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
