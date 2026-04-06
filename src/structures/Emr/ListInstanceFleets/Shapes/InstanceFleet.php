<?php

namespace Sunaoka\Aws\Structures\Emr\ListInstanceFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Name
 * @property InstanceFleetStatus|null $Status
 * @property 'MASTER'|'CORE'|'TASK'|null $InstanceFleetType
 * @property int<0, max>|null $TargetOnDemandCapacity
 * @property int<0, max>|null $TargetSpotCapacity
 * @property int<0, max>|null $ProvisionedOnDemandCapacity
 * @property int<0, max>|null $ProvisionedSpotCapacity
 * @property list<InstanceTypeSpecification>|null $InstanceTypeSpecifications
 * @property InstanceFleetProvisioningSpecifications|null $LaunchSpecifications
 * @property InstanceFleetResizingSpecifications|null $ResizeSpecifications
 * @property string|null $Context
 */
class InstanceFleet extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Name?: string|null,
     *     Status?: InstanceFleetStatus|null,
     *     InstanceFleetType?: 'MASTER'|'CORE'|'TASK'|null,
     *     TargetOnDemandCapacity?: int<0, max>|null,
     *     TargetSpotCapacity?: int<0, max>|null,
     *     ProvisionedOnDemandCapacity?: int<0, max>|null,
     *     ProvisionedSpotCapacity?: int<0, max>|null,
     *     InstanceTypeSpecifications?: list<InstanceTypeSpecification>|null,
     *     LaunchSpecifications?: InstanceFleetProvisioningSpecifications|null,
     *     ResizeSpecifications?: InstanceFleetResizingSpecifications|null,
     *     Context?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
