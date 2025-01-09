<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetIdleRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $savingsOpportunityPercentage
 * @property IdleEstimatedMonthlySavings $estimatedMonthlySavings
 */
class IdleSavingsOpportunity extends Shape
{
    /**
     * @param array{
     *     savingsOpportunityPercentage?: double,
     *     estimatedMonthlySavings?: IdleEstimatedMonthlySavings
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
