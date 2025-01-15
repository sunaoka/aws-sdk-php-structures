<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetEBSVolumeRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $savingsOpportunityPercentage
 * @property EBSEstimatedMonthlySavings|null $estimatedMonthlySavings
 */
class EBSSavingsOpportunityAfterDiscounts extends Shape
{
    /**
     * @param array{
     *     savingsOpportunityPercentage?: double|null,
     *     estimatedMonthlySavings?: EBSEstimatedMonthlySavings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
