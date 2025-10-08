<?php

namespace Sunaoka\Aws\Structures\Ecs\DescribeCapacityProviders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $infrastructureRoleArn
 * @property InstanceLaunchTemplate|null $instanceLaunchTemplate
 * @property 'CAPACITY_PROVIDER'|'NONE'|null $propagateTags
 */
class ManagedInstancesProvider extends Shape
{
    /**
     * @param array{
     *     infrastructureRoleArn?: string|null,
     *     instanceLaunchTemplate?: InstanceLaunchTemplate|null,
     *     propagateTags?: 'CAPACITY_PROVIDER'|'NONE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
