<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\UpdateBillEstimate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CostAmount|null $historicalCost
 * @property CostAmount|null $estimatedCost
 */
class CostDifference extends Shape
{
    /**
     * @param array{
     *     historicalCost?: CostAmount|null,
     *     estimatedCost?: CostAmount|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
