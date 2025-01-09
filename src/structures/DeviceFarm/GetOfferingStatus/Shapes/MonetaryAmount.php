<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\GetOfferingStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $amount
 * @property 'USD' $currencyCode
 */
class MonetaryAmount extends Shape
{
    /**
     * @param array{
     *     amount?: double,
     *     currencyCode?: 'USD'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
