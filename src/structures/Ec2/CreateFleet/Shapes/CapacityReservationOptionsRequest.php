<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'use-capacity-reservations-first' $UsageStrategy
 */
class CapacityReservationOptionsRequest extends Shape
{
    /**
     * @param array{UsageStrategy?: 'use-capacity-reservations-first'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
