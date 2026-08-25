<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'prioritized'|null $AllocationStrategy
 * @property list<'on-demand-capacity-reservation'|'capacity-block'|'interruptible-capacity-reservation'>|null $ReservationTypes
 * @property FleetCapacityReservationTargetRequest|null $CapacityReservationTarget
 * @property ReservedCapacityFallbackOptionsRequest|null $ReservedCapacityFallbackOptions
 */
class ReservedCapacityOptionsRequest extends Shape
{
    /**
     * @param array{
     *     AllocationStrategy?: 'prioritized'|null,
     *     ReservationTypes?: list<'on-demand-capacity-reservation'|'capacity-block'|'interruptible-capacity-reservation'>|null,
     *     CapacityReservationTarget?: FleetCapacityReservationTargetRequest|null,
     *     ReservedCapacityFallbackOptions?: ReservedCapacityFallbackOptionsRequest|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
