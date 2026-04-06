<?php

namespace Sunaoka\Aws\Structures\Emr\RunJobFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $TimeoutDurationMinutes
 * @property 'lowest-price'|'prioritized'|null $AllocationStrategy
 * @property OnDemandCapacityReservationOptions|null $CapacityReservationOptions
 */
class OnDemandResizingSpecification extends Shape
{
    /**
     * @param array{
     *     TimeoutDurationMinutes?: int<0, max>|null,
     *     AllocationStrategy?: 'lowest-price'|'prioritized'|null,
     *     CapacityReservationOptions?: OnDemandCapacityReservationOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
