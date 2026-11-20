<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\GetUsageLinesEstimatedCost\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $usageAmount
 * @property string|null $usageUnit
 * @property double|null $cost
 * @property 'USD'|null $currency
 */
class GetUsageLinesEstimatedCostEstimatedCost extends Shape
{
    /**
     * @param array{
     *     usageAmount?: double|null,
     *     usageUnit?: string|null,
     *     cost?: double|null,
     *     currency?: 'USD'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
