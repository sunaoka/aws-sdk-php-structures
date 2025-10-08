<?php

namespace Sunaoka\Aws\Structures\Ecs\DeleteCapacityProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ec2InstanceProfileArn
 * @property ManagedInstancesNetworkConfiguration $networkConfiguration
 * @property ManagedInstancesStorageConfiguration|null $storageConfiguration
 * @property 'BASIC'|'DETAILED'|null $monitoring
 * @property InstanceRequirementsRequest|null $instanceRequirements
 */
class InstanceLaunchTemplate extends Shape
{
    /**
     * @param array{
     *     ec2InstanceProfileArn: string,
     *     networkConfiguration: ManagedInstancesNetworkConfiguration,
     *     storageConfiguration?: ManagedInstancesStorageConfiguration|null,
     *     monitoring?: 'BASIC'|'DETAILED'|null,
     *     instanceRequirements?: InstanceRequirementsRequest|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
