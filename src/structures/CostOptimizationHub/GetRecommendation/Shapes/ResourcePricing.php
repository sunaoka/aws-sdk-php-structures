<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $estimatedCostBeforeDiscounts
 * @property double $estimatedNetUnusedAmortizedCommitments
 * @property EstimatedDiscounts $estimatedDiscounts
 * @property double $estimatedCostAfterDiscounts
 */
class ResourcePricing extends Shape
{
    /**
     * @param array{
     *     estimatedCostBeforeDiscounts?: double,
     *     estimatedNetUnusedAmortizedCommitments?: double,
     *     estimatedDiscounts?: EstimatedDiscounts,
     *     estimatedCostAfterDiscounts?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
