<?php

namespace Sunaoka\Aws\Structures\AutoScaling\UpdateAutoScalingGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'capacity-reservations-only'|'capacity-reservations-first'|'none'|'default' $CapacityReservationPreference
 * @property CapacityReservationTarget $CapacityReservationTarget
 */
class CapacityReservationSpecification extends Shape
{
    /**
     * @param array{
     *     CapacityReservationPreference?: 'capacity-reservations-only'|'capacity-reservations-first'|'none'|'default',
     *     CapacityReservationTarget?: CapacityReservationTarget
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
