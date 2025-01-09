<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $savingsPlansDiscount
 * @property double $reservedInstancesDiscount
 * @property double $otherDiscount
 */
class EstimatedDiscounts extends Shape
{
    /**
     * @param array{
     *     savingsPlansDiscount?: double,
     *     reservedInstancesDiscount?: double,
     *     otherDiscount?: double
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
