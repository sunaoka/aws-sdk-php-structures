<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetRDSDatabaseRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $savingsOpportunityPercentage
 * @property RDSStorageEstimatedMonthlySavings $estimatedMonthlySavings
 */
class RDSStorageSavingsOpportunityAfterDiscounts extends Shape
{
    /**
     * @param array{
     *     savingsOpportunityPercentage?: double,
     *     estimatedMonthlySavings?: RDSStorageEstimatedMonthlySavings
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
