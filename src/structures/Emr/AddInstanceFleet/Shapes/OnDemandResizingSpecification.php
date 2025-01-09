<?php

namespace Sunaoka\Aws\Structures\Emr\AddInstanceFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $TimeoutDurationMinutes
 * @property 'lowest-price'|'prioritized' $AllocationStrategy
 * @property OnDemandCapacityReservationOptions $CapacityReservationOptions
 */
class OnDemandResizingSpecification extends Shape
{
    /**
     * @param array{
     *     TimeoutDurationMinutes?: int<0, max>,
     *     AllocationStrategy?: 'lowest-price'|'prioritized',
     *     CapacityReservationOptions?: OnDemandCapacityReservationOptions
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
