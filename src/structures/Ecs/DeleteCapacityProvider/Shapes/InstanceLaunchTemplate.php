<?php

namespace Sunaoka\Aws\Structures\Ecs\DeleteCapacityProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ec2InstanceProfileArn
 * @property ManagedInstancesNetworkConfiguration $networkConfiguration
 * @property ManagedInstancesStorageConfiguration|null $storageConfiguration
 * @property 'BASIC'|'DETAILED'|null $monitoring
 * @property 'ON_DEMAND'|'SPOT'|null $capacityOptionType
 * @property InstanceRequirementsRequest|null $instanceRequirements
 * @property bool|null $fipsEnabled
 */
class InstanceLaunchTemplate extends Shape
{
    /**
     * @param array{
     *     ec2InstanceProfileArn: string,
     *     networkConfiguration: ManagedInstancesNetworkConfiguration,
     *     storageConfiguration?: ManagedInstancesStorageConfiguration|null,
     *     monitoring?: 'BASIC'|'DETAILED'|null,
     *     capacityOptionType?: 'ON_DEMAND'|'SPOT'|null,
     *     instanceRequirements?: InstanceRequirementsRequest|null,
     *     fipsEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
