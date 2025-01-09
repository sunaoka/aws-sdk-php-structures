<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetAutoScalingGroupRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $savingsOpportunityPercentage
 * @property AutoScalingGroupEstimatedMonthlySavings $estimatedMonthlySavings
 */
class AutoScalingGroupSavingsOpportunityAfterDiscounts extends Shape
{
    /**
     * @param array{
     *     savingsOpportunityPercentage?: double,
     *     estimatedMonthlySavings?: AutoScalingGroupEstimatedMonthlySavings
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
