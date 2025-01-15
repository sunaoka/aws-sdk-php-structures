<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'lowest-price'|'prioritized'|null $AllocationStrategy
 * @property CapacityReservationOptions|null $CapacityReservationOptions
 * @property bool|null $SingleInstanceType
 * @property bool|null $SingleAvailabilityZone
 * @property int|null $MinTargetCapacity
 * @property string|null $MaxTotalPrice
 */
class OnDemandOptions extends Shape
{
    /**
     * @param array{
     *     AllocationStrategy?: 'lowest-price'|'prioritized'|null,
     *     CapacityReservationOptions?: CapacityReservationOptions|null,
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
