<?php

namespace Sunaoka\Aws\Structures\BCMPricingCalculator\ListBillEstimateCommitments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $amount
 * @property 'USD' $currency
 */
class CostAmount extends Shape
{
    /**
     * @param array{
     *     amount?: double,
     *     currency?: 'USD'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
