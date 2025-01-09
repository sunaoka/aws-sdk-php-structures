<?php

namespace Sunaoka\Aws\Structures\Ec2\GetReservedInstancesExchangeQuote\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HourlyPrice
 * @property string $RemainingTotalValue
 * @property string $RemainingUpfrontValue
 */
class ReservationValue extends Shape
{
    /**
     * @param array{
     *     HourlyPrice?: string,
     *     RemainingTotalValue?: string,
     *     RemainingUpfrontValue?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
