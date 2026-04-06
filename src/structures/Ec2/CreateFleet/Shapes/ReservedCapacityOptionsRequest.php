<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'interruptible-capacity-reservation'>|null $ReservationTypes
 */
class ReservedCapacityOptionsRequest extends Shape
{
    /**
     * @param array{ReservationTypes?: list<'interruptible-capacity-reservation'>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
