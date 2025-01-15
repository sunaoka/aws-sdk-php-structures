<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'lowest-price'|'diversified'|'capacity-optimized'|'capacity-optimized-prioritized'|'price-capacity-optimized'|null $AllocationStrategy
 * @property FleetSpotMaintenanceStrategies|null $MaintenanceStrategies
 * @property 'hibernate'|'stop'|'terminate'|null $InstanceInterruptionBehavior
 * @property int|null $InstancePoolsToUseCount
 * @property bool|null $SingleInstanceType
 * @property bool|null $SingleAvailabilityZone
 * @property int|null $MinTargetCapacity
 * @property string|null $MaxTotalPrice
 */
class SpotOptions extends Shape
{
    /**
     * @param array{
     *     AllocationStrategy?: 'lowest-price'|'diversified'|'capacity-optimized'|'capacity-optimized-prioritized'|'price-capacity-optimized'|null,
     *     MaintenanceStrategies?: FleetSpotMaintenanceStrategies|null,
     *     InstanceInterruptionBehavior?: 'hibernate'|'stop'|'terminate'|null,
     *     InstancePoolsToUseCount?: int|null,
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
