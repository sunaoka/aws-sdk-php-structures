<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $savingsPlansDiscount
 * @property double|null $reservedInstancesDiscount
 * @property double|null $otherDiscount
 */
class EstimatedDiscounts extends Shape
{
    /**
     * @param array{
     *     savingsPlansDiscount?: double|null,
     *     reservedInstancesDiscount?: double|null,
     *     otherDiscount?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
