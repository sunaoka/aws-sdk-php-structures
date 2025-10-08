<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateCapacityProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $infrastructureRoleArn
 * @property InstanceLaunchTemplateUpdate $instanceLaunchTemplate
 * @property 'CAPACITY_PROVIDER'|'NONE'|null $propagateTags
 */
class UpdateManagedInstancesProviderConfiguration extends Shape
{
    /**
     * @param array{
     *     infrastructureRoleArn: string,
     *     instanceLaunchTemplate: InstanceLaunchTemplateUpdate,
     *     propagateTags?: 'CAPACITY_PROVIDER'|'NONE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
