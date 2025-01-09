<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateLaunchTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'capacity-reservations-only'|'open'|'none' $CapacityReservationPreference
 * @property CapacityReservationTarget $CapacityReservationTarget
 */
class LaunchTemplateCapacityReservationSpecificationRequest extends Shape
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
