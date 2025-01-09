<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyInstanceCapacityReservationAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'capacity-reservations-only'|'open'|'none' $CapacityReservationPreference
 * @property CapacityReservationTarget $CapacityReservationTarget
 */
class CapacityReservationSpecification extends Shape
{
    /**
     * @param array{
     *     CapacityReservationPreference?: 'capacity-reservations-only'|'open'|'none',
     *     CapacityReservationTarget?: CapacityReservationTarget
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
