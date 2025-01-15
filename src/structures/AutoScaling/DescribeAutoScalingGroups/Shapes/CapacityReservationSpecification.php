<?php

namespace Sunaoka\Aws\Structures\AutoScaling\DescribeAutoScalingGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'capacity-reservations-only'|'capacity-reservations-first'|'none'|'default'|null $CapacityReservationPreference
 * @property CapacityReservationTarget|null $CapacityReservationTarget
 */
class CapacityReservationSpecification extends Shape
{
    /**
     * @param array{
     *     CapacityReservationPreference?: 'capacity-reservations-only'|'capacity-reservations-first'|'none'|'default'|null,
     *     CapacityReservationTarget?: CapacityReservationTarget|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
