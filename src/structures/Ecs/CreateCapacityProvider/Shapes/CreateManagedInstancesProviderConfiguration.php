<?php

namespace Sunaoka\Aws\Structures\Ecs\CreateCapacityProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $infrastructureRoleArn
 * @property InstanceLaunchTemplate $instanceLaunchTemplate
 * @property 'CAPACITY_PROVIDER'|'NONE'|null $propagateTags
 */
class CreateManagedInstancesProviderConfiguration extends Shape
{
    /**
     * @param array{
     *     infrastructureRoleArn: string,
     *     instanceLaunchTemplate: InstanceLaunchTemplate,
     *     propagateTags?: 'CAPACITY_PROVIDER'|'NONE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
