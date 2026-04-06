<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateLaunchTemplateVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'capacity-reservations-only'|'open'|'none'|null $CapacityReservationPreference
 * @property CapacityReservationTarget|null $CapacityReservationTarget
 */
class LaunchTemplateCapacityReservationSpecificationRequest extends Shape
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
