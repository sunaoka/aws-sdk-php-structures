<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'lowest-price'|'prioritized' $AllocationStrategy
 * @property CapacityReservationOptionsRequest $CapacityReservationOptions
 * @property bool $SingleInstanceType
 * @property bool $SingleAvailabilityZone
 * @property int $MinTargetCapacity
 * @property string $MaxTotalPrice
 */
class OnDemandOptionsRequest extends Shape
{
    /**
     * @param array{
     *     AllocationStrategy?: 'lowest-price'|'prioritized',
     *     CapacityReservationOptions?: CapacityReservationOptionsRequest,
     *     SingleInstanceType?: bool,
     *     SingleAvailabilityZone?: bool,
     *     MinTargetCapacity?: int,
     *     MaxTotalPrice?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
