<?php

namespace Sunaoka\Aws\Structures\Emr\AddInstanceFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property 'MASTER'|'CORE'|'TASK' $InstanceFleetType
 * @property int $TargetOnDemandCapacity
 * @property int $TargetSpotCapacity
 * @property list<InstanceTypeConfig> $InstanceTypeConfigs
 * @property InstanceFleetProvisioningSpecifications $LaunchSpecifications
 * @property InstanceFleetResizingSpecifications $ResizeSpecifications
 * @property string $Context
 */
class InstanceFleetConfig extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     InstanceFleetType: 'MASTER'|'CORE'|'TASK',
     *     TargetOnDemandCapacity?: int,
     *     TargetSpotCapacity?: int,
     *     InstanceTypeConfigs?: list<InstanceTypeConfig>,
     *     LaunchSpecifications?: InstanceFleetProvisioningSpecifications,
     *     ResizeSpecifications?: InstanceFleetResizingSpecifications,
     *     Context?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
