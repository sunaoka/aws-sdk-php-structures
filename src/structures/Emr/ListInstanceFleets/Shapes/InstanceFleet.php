<?php

namespace Sunaoka\Aws\Structures\Emr\ListInstanceFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Name
 * @property InstanceFleetStatus $Status
 * @property 'MASTER'|'CORE'|'TASK' $InstanceFleetType
 * @property int<0, max> $TargetOnDemandCapacity
 * @property int<0, max> $TargetSpotCapacity
 * @property int<0, max> $ProvisionedOnDemandCapacity
 * @property int<0, max> $ProvisionedSpotCapacity
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
     *     TargetOnDemandCapacity?: int<0, max>,
     *     TargetSpotCapacity?: int<0, max>,
     *     ProvisionedOnDemandCapacity?: int<0, max>,
     *     ProvisionedSpotCapacity?: int<0, max>,
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
