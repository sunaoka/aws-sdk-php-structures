<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\CreateBillEstimate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CostAmount $historicalCost
 * @property CostAmount $estimatedCost
 */
class CostDifference extends Shape
{
    /**
     * @param array{
     *     historicalCost?: CostAmount,
     *     estimatedCost?: CostAmount
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
