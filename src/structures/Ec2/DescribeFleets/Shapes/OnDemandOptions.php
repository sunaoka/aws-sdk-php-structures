<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'lowest-price'|'prioritized' $AllocationStrategy
 * @property CapacityReservationOptions $CapacityReservationOptions
 * @property bool $SingleInstanceType
 * @property bool $SingleAvailabilityZone
 * @property int $MinTargetCapacity
 * @property string $MaxTotalPrice
 */
class OnDemandOptions extends Shape
{
    /**
     * @param array{
     *     AllocationStrategy?: 'lowest-price'|'prioritized',
     *     CapacityReservationOptions?: CapacityReservationOptions,
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
