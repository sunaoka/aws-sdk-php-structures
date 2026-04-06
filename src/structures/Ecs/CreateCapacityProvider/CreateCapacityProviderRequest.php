<?php

namespace Sunaoka\Aws\Structures\Ecs\CreateCapacityProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $cluster
 * @property Shapes\AutoScalingGroupProvider|null $autoScalingGroupProvider
 * @property Shapes\CreateManagedInstancesProviderConfiguration|null $managedInstancesProvider
 * @property list<Shapes\Tag>|null $tags
 */
class CreateCapacityProviderRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     cluster?: string|null,
     *     autoScalingGroupProvider?: Shapes\AutoScalingGroupProvider|null,
     *     managedInstancesProvider?: Shapes\CreateManagedInstancesProviderConfiguration|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
