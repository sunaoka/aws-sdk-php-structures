<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetEBSVolumeRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $savingsOpportunityPercentage
 * @property EBSEstimatedMonthlySavings $estimatedMonthlySavings
 */
class EBSSavingsOpportunityAfterDiscounts extends Shape
{
    /**
     * @param array{
     *     savingsOpportunityPercentage?: double,
     *     estimatedMonthlySavings?: EBSEstimatedMonthlySavings
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
