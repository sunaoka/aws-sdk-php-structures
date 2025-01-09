<?php

namespace Sunaoka\Aws\Structures\Ec2\PurchaseReservedInstancesOffering\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $Amount
 * @property 'USD' $CurrencyCode
 */
class ReservedInstanceLimitPrice extends Shape
{
    /**
     * @param array{
     *     Amount?: double,
     *     CurrencyCode?: 'USD'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
