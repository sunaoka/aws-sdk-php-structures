<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeComputeEnvironments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ec2InstanceProfileArn
 * @property ManagedInstancesNetworkConfiguration $networkConfiguration
 * @property InstanceRequirementsRequest|null $instanceRequirements
 * @property string|null $capacityOptionType
 * @property ManagedInstancesStorageConfiguration|null $storageConfiguration
 * @property string|null $monitoring
 * @property bool|null $fipsEnabled
 * @property CapacityReservationRequest|null $capacityReservations
 * @property bool|null $instanceMetadataTagsPropagation
 * @property ManagedInstancesLocalStorageConfiguration|null $localStorageConfiguration
 */
class InstanceLaunchTemplate extends Shape
{
    /**
     * @param array{
     *     ec2InstanceProfileArn: string,
     *     networkConfiguration: ManagedInstancesNetworkConfiguration,
     *     instanceRequirements?: InstanceRequirementsRequest|null,
     *     capacityOptionType?: string|null,
     *     storageConfiguration?: ManagedInstancesStorageConfiguration|null,
     *     monitoring?: string|null,
     *     fipsEnabled?: bool|null,
     *     capacityReservations?: CapacityReservationRequest|null,
     *     instanceMetadataTagsPropagation?: bool|null,
     *     localStorageConfiguration?: ManagedInstancesLocalStorageConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
