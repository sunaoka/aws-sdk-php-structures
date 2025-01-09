<?php

namespace Sunaoka\Aws\Structures\Ec2\GetReservedInstancesExchangeQuote\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ReservationValue $ReservationValue
 * @property string $ReservedInstanceId
 */
class ReservedInstanceReservationValue extends Shape
{
    /**
     * @param array{
     *     ReservationValue?: ReservationValue,
     *     ReservedInstanceId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
