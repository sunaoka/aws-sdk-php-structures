<?php

namespace Sunaoka\Aws\Structures\Ec2\GetReservedInstancesExchangeQuote\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ReservationValue $ReservationValue
 * @property TargetConfiguration $TargetConfiguration
 */
class TargetReservationValue extends Shape
{
    /**
     * @param array{
     *     ReservationValue?: ReservationValue,
     *     TargetConfiguration?: TargetConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
