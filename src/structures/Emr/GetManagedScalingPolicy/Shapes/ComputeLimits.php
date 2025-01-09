<?php

namespace Sunaoka\Aws\Structures\Emr\GetManagedScalingPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'InstanceFleetUnits'|'Instances'|'VCPU' $UnitType
 * @property int $MinimumCapacityUnits
 * @property int $MaximumCapacityUnits
 * @property int $MaximumOnDemandCapacityUnits
 * @property int $MaximumCoreCapacityUnits
 */
class ComputeLimits extends Shape
{
    /**
     * @param array{
     *     UnitType: 'InstanceFleetUnits'|'Instances'|'VCPU',
     *     MinimumCapacityUnits: int,
     *     MaximumCapacityUnits: int,
     *     MaximumOnDemandCapacityUnits?: int,
     *     MaximumCoreCapacityUnits?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
