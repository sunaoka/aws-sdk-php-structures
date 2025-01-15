<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $estimatedCostBeforeDiscounts
 * @property double|null $estimatedNetUnusedAmortizedCommitments
 * @property EstimatedDiscounts|null $estimatedDiscounts
 * @property double|null $estimatedCostAfterDiscounts
 */
class ResourcePricing extends Shape
{
    /**
     * @param array{
     *     estimatedCostBeforeDiscounts?: double|null,
     *     estimatedNetUnusedAmortizedCommitments?: double|null,
     *     estimatedDiscounts?: EstimatedDiscounts|null,
     *     estimatedCostAfterDiscounts?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
