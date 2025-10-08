<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateCapacityProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ec2InstanceProfileArn
 * @property ManagedInstancesNetworkConfiguration|null $networkConfiguration
 * @property ManagedInstancesStorageConfiguration|null $storageConfiguration
 * @property 'BASIC'|'DETAILED'|null $monitoring
 * @property InstanceRequirementsRequest|null $instanceRequirements
 */
class InstanceLaunchTemplateUpdate extends Shape
{
    /**
     * @param array{
     *     ec2InstanceProfileArn?: string|null,
     *     networkConfiguration?: ManagedInstancesNetworkConfiguration|null,
     *     storageConfiguration?: ManagedInstancesStorageConfiguration|null,
     *     monitoring?: 'BASIC'|'DETAILED'|null,
     *     instanceRequirements?: InstanceRequirementsRequest|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
