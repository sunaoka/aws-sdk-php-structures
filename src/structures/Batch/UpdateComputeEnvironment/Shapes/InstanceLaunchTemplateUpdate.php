<?php

namespace Sunaoka\Aws\Structures\Batch\UpdateComputeEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ec2InstanceProfileArn
 * @property ManagedInstancesNetworkConfiguration|null $networkConfiguration
 * @property InstanceRequirementsRequest|null $instanceRequirements
 * @property ManagedInstancesStorageConfiguration|null $storageConfiguration
 * @property string|null $monitoring
 * @property CapacityReservationRequest|null $capacityReservations
 * @property bool|null $instanceMetadataTagsPropagation
 * @property ManagedInstancesLocalStorageConfiguration|null $localStorageConfiguration
 */
class InstanceLaunchTemplateUpdate extends Shape
{
    /**
     * @param array{
     *     ec2InstanceProfileArn?: string|null,
     *     networkConfiguration?: ManagedInstancesNetworkConfiguration|null,
     *     instanceRequirements?: InstanceRequirementsRequest|null,
     *     storageConfiguration?: ManagedInstancesStorageConfiguration|null,
     *     monitoring?: string|null,
     *     capacityReservations?: CapacityReservationRequest|null,
     *     instanceMetadataTagsPropagation?: bool|null,
     *     localStorageConfiguration?: ManagedInstancesLocalStorageConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
