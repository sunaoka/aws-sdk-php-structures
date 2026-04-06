<?php

namespace Sunaoka\Aws\Structures\Ec2\RunInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'capacity-reservations-only'|'open'|'none'|null $CapacityReservationPreference
 * @property CapacityReservationTarget|null $CapacityReservationTarget
 */
class CapacityReservationSpecification extends Shape
{
    /**
     * @param array{
     *     CapacityReservationPreference?: 'capacity-reservations-only'|'open'|'none'|null,
     *     CapacityReservationTarget?: CapacityReservationTarget|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
