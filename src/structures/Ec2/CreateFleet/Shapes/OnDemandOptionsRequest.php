<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'lowest-price'|'prioritized'|null $AllocationStrategy
 * @property CapacityReservationOptionsRequest|null $CapacityReservationOptions
 * @property bool|null $SingleInstanceType
 * @property bool|null $SingleAvailabilityZone
 * @property int|null $MinTargetCapacity
 * @property string|null $MaxTotalPrice
 */
class OnDemandOptionsRequest extends Shape
{
    /**
     * @param array{
     *     AllocationStrategy?: 'lowest-price'|'prioritized'|null,
     *     CapacityReservationOptions?: CapacityReservationOptionsRequest|null,
     *     SingleInstanceType?: bool|null,
     *     SingleAvailabilityZone?: bool|null,
     *     MinTargetCapacity?: int|null,
     *     MaxTotalPrice?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
