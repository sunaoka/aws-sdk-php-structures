<?php

namespace Sunaoka\Aws\Structures\Emr\ListInstanceFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Name
 * @property InstanceFleetStatus $Status
 * @property 'MASTER'|'CORE'|'TASK' $InstanceFleetType
 * @property int $TargetOnDemandCapacity
 * @property int $TargetSpotCapacity
 * @property int $ProvisionedOnDemandCapacity
 * @property int $ProvisionedSpotCapacity
 * @property list<InstanceTypeSpecification> $InstanceTypeSpecifications
 * @property InstanceFleetProvisioningSpecifications $LaunchSpecifications
 * @property InstanceFleetResizingSpecifications $ResizeSpecifications
 * @property string $Context
 */
class InstanceFleet extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Name?: string,
     *     Status?: InstanceFleetStatus,
     *     InstanceFleetType?: 'MASTER'|'CORE'|'TASK',
     *     TargetOnDemandCapacity?: int,
     *     TargetSpotCapacity?: int,
     *     ProvisionedOnDemandCapacity?: int,
     *     ProvisionedSpotCapacity?: int,
     *     InstanceTypeSpecifications?: list<InstanceTypeSpecification>,
     *     LaunchSpecifications?: InstanceFleetProvisioningSpecifications,
     *     ResizeSpecifications?: InstanceFleetResizingSpecifications,
     *     Context?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
