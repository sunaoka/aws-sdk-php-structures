<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'capacity-reservations-only'|'open'|'none' $CapacityReservationPreference
 * @property CapacityReservationTargetResponse $CapacityReservationTarget
 */
class CapacityReservationSpecificationResponse extends Shape
{
    /**
     * @param array{
     *     CapacityReservationPreference?: 'capacity-reservations-only'|'open'|'none',
     *     CapacityReservationTarget?: CapacityReservationTargetResponse
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
