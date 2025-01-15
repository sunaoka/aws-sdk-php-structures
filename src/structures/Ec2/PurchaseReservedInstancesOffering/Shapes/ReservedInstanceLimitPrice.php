<?php

namespace Sunaoka\Aws\Structures\Ec2\PurchaseReservedInstancesOffering\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $Amount
 * @property 'USD'|null $CurrencyCode
 */
class ReservedInstanceLimitPrice extends Shape
{
    /**
     * @param array{
     *     Amount?: double|null,
     *     CurrencyCode?: 'USD'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
