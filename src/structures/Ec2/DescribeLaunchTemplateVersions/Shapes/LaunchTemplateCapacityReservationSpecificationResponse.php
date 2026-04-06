<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeLaunchTemplateVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'capacity-reservations-only'|'open'|'none'|null $CapacityReservationPreference
 * @property CapacityReservationTargetResponse|null $CapacityReservationTarget
 */
class LaunchTemplateCapacityReservationSpecificationResponse extends Shape
{
    /**
     * @param array{
     *     CapacityReservationPreference?: 'capacity-reservations-only'|'open'|'none'|null,
     *     CapacityReservationTarget?: CapacityReservationTargetResponse|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
