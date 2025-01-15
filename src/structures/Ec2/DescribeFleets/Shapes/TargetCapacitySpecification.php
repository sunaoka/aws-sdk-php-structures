<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $TotalTargetCapacity
 * @property int|null $OnDemandTargetCapacity
 * @property int|null $SpotTargetCapacity
 * @property 'spot'|'on-demand'|'capacity-block'|null $DefaultTargetCapacityType
 * @property 'vcpu'|'memory-mib'|'units'|null $TargetCapacityUnitType
 */
class TargetCapacitySpecification extends Shape
{
    /**
     * @param array{
     *     TotalTargetCapacity?: int|null,
     *     OnDemandTargetCapacity?: int|null,
     *     SpotTargetCapacity?: int|null,
     *     DefaultTargetCapacityType?: 'spot'|'on-demand'|'capacity-block'|null,
     *     TargetCapacityUnitType?: 'vcpu'|'memory-mib'|'units'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
