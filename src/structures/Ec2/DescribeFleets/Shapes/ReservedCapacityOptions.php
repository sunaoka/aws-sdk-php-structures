<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'interruptible-capacity-reservation'>|null $ReservationTypes
 */
class ReservedCapacityOptions extends Shape
{
    /**
     * @param array{ReservationTypes?: list<'interruptible-capacity-reservation'>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
