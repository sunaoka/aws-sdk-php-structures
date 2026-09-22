<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeCapacityReservationDateChangeQuotes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ModificationReservationUpdate|null $ReservationUpdate
 */
class ModificationTerms extends Shape
{
    /**
     * @param array{ReservationUpdate?: ModificationReservationUpdate|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
