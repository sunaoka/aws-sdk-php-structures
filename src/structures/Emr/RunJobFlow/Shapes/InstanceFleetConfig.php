<?php

namespace Sunaoka\Aws\Structures\Emr\RunJobFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property 'MASTER'|'CORE'|'TASK' $InstanceFleetType
 * @property int<0, max>|null $TargetOnDemandCapacity
 * @property int<0, max>|null $TargetSpotCapacity
 * @property list<InstanceTypeConfig>|null $InstanceTypeConfigs
 * @property InstanceFleetProvisioningSpecifications|null $LaunchSpecifications
 * @property InstanceFleetResizingSpecifications|null $ResizeSpecifications
 * @property string|null $Context
 */
class InstanceFleetConfig extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     InstanceFleetType: 'MASTER'|'CORE'|'TASK',
     *     TargetOnDemandCapacity?: int<0, max>|null,
     *     TargetSpotCapacity?: int<0, max>|null,
     *     InstanceTypeConfigs?: list<InstanceTypeConfig>|null,
     *     LaunchSpecifications?: InstanceFleetProvisioningSpecifications|null,
     *     ResizeSpecifications?: InstanceFleetResizingSpecifications|null,
     *     Context?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
