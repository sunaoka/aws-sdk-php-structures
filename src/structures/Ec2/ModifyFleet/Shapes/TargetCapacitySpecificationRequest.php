<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $TotalTargetCapacity
 * @property int $OnDemandTargetCapacity
 * @property int $SpotTargetCapacity
 * @property 'spot'|'on-demand'|'capacity-block' $DefaultTargetCapacityType
 * @property 'vcpu'|'memory-mib'|'units' $TargetCapacityUnitType
 */
class TargetCapacitySpecificationRequest extends Shape
{
    /**
     * @param array{
     *     TotalTargetCapacity: int,
     *     OnDemandTargetCapacity?: int,
     *     SpotTargetCapacity?: int,
     *     DefaultTargetCapacityType?: 'spot'|'on-demand'|'capacity-block',
     *     TargetCapacityUnitType?: 'vcpu'|'memory-mib'|'units'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
