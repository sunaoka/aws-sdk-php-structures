<?php

namespace Sunaoka\Aws\Structures\Ec2\GetReservedInstancesExchangeQuote\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ReservationValue|null $ReservationValue
 * @property string|null $ReservedInstanceId
 */
class ReservedInstanceReservationValue extends Shape
{
    /**
     * @param array{
     *     ReservationValue?: ReservationValue|null,
     *     ReservedInstanceId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
