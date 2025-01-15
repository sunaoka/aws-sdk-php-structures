<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetAutoScalingGroupRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $savingsOpportunityPercentage
 * @property EstimatedMonthlySavings|null $estimatedMonthlySavings
 */
class SavingsOpportunity extends Shape
{
    /**
     * @param array{
     *     savingsOpportunityPercentage?: double|null,
     *     estimatedMonthlySavings?: EstimatedMonthlySavings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
