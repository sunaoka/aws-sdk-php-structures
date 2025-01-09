<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'lowest-price'|'diversified'|'capacity-optimized'|'capacity-optimized-prioritized'|'price-capacity-optimized' $AllocationStrategy
 * @property FleetSpotMaintenanceStrategies $MaintenanceStrategies
 * @property 'hibernate'|'stop'|'terminate' $InstanceInterruptionBehavior
 * @property int $InstancePoolsToUseCount
 * @property bool $SingleInstanceType
 * @property bool $SingleAvailabilityZone
 * @property int $MinTargetCapacity
 * @property string $MaxTotalPrice
 */
class SpotOptions extends Shape
{
    /**
     * @param array{
     *     AllocationStrategy?: 'lowest-price'|'diversified'|'capacity-optimized'|'capacity-optimized-prioritized'|'price-capacity-optimized',
     *     MaintenanceStrategies?: FleetSpotMaintenanceStrategies,
     *     InstanceInterruptionBehavior?: 'hibernate'|'stop'|'terminate',
     *     InstancePoolsToUseCount?: int,
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
