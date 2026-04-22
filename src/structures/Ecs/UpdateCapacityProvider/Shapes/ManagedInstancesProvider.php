<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateCapacityProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $infrastructureRoleArn
 * @property InstanceLaunchTemplate|null $instanceLaunchTemplate
 * @property 'CAPACITY_PROVIDER'|'NONE'|null $propagateTags
 * @property InfrastructureOptimization|null $infrastructureOptimization
 * @property AutoRepairConfiguration|null $autoRepairConfiguration
 */
class ManagedInstancesProvider extends Shape
{
    /**
     * @param array{
     *     infrastructureRoleArn?: string|null,
     *     instanceLaunchTemplate?: InstanceLaunchTemplate|null,
     *     propagateTags?: 'CAPACITY_PROVIDER'|'NONE'|null,
     *     infrastructureOptimization?: InfrastructureOptimization|null,
     *     autoRepairConfiguration?: AutoRepairConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
