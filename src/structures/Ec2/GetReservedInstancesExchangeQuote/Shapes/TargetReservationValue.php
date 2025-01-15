<?php

namespace Sunaoka\Aws\Structures\Ec2\GetReservedInstancesExchangeQuote\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ReservationValue|null $ReservationValue
 * @property TargetConfiguration|null $TargetConfiguration
 */
class TargetReservationValue extends Shape
{
    /**
     * @param array{
     *     ReservationValue?: ReservationValue|null,
     *     TargetConfiguration?: TargetConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
