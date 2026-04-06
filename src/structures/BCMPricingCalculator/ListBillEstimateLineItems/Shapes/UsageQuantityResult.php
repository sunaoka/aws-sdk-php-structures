<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\ListBillEstimateLineItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $amount
 * @property string|null $unit
 */
class UsageQuantityResult extends Shape
{
    /**
     * @param array{
     *     amount?: double|null,
     *     unit?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
