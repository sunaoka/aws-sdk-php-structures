<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\GetOfferingStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $amount
 * @property 'USD'|null $currencyCode
 */
class MonetaryAmount extends Shape
{
    /**
     * @param array{
     *     amount?: double|null,
     *     currencyCode?: 'USD'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
