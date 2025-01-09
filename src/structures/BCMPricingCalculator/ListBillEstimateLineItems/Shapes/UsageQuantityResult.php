<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\ListBillEstimateLineItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $amount
 * @property string $unit
 */
class UsageQuantityResult extends Shape
{
    /**
     * @param array{
     *     amount?: double,
     *     unit?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
