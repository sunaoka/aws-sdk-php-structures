<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'use-capacity-reservations-first'|null $UsageStrategy
 */
class CapacityReservationOptions extends Shape
{
    /**
     * @param array{UsageStrategy?: 'use-capacity-reservations-first'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
