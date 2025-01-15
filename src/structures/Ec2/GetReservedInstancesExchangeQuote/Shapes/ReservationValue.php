<?php

namespace Sunaoka\Aws\Structures\Ec2\GetReservedInstancesExchangeQuote\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $HourlyPrice
 * @property string|null $RemainingTotalValue
 * @property string|null $RemainingUpfrontValue
 */
class ReservationValue extends Shape
{
    /**
     * @param array{
     *     HourlyPrice?: string|null,
     *     RemainingTotalValue?: string|null,
     *     RemainingUpfrontValue?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
