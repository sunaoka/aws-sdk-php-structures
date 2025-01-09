<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\RenewOffering\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MonetaryAmount $cost
 * @property 'MONTHLY' $frequency
 */
class RecurringCharge extends Shape
{
    /**
     * @param array{
     *     cost?: MonetaryAmount,
     *     frequency?: 'MONTHLY'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
