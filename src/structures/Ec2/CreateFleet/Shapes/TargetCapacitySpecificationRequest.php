<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $TotalTargetCapacity
 * @property int|null $OnDemandTargetCapacity
 * @property int|null $SpotTargetCapacity
 * @property 'spot'|'on-demand'|'capacity-block'|null $DefaultTargetCapacityType
 * @property 'vcpu'|'memory-mib'|'units'|null $TargetCapacityUnitType
 */
class TargetCapacitySpecificationRequest extends Shape
{
    /**
     * @param array{
     *     TotalTargetCapacity: int,
     *     OnDemandTargetCapacity?: int|null,
     *     SpotTargetCapacity?: int|null,
     *     DefaultTargetCapacityType?: 'spot'|'on-demand'|'capacity-block'|null,
     *     TargetCapacityUnitType?: 'vcpu'|'memory-mib'|'units'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
