<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateCapacityProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string|null $cluster
 * @property Shapes\AutoScalingGroupProviderUpdate|null $autoScalingGroupProvider
 * @property Shapes\UpdateManagedInstancesProviderConfiguration|null $managedInstancesProvider
 */
class UpdateCapacityProviderRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     cluster?: string|null,
     *     autoScalingGroupProvider?: Shapes\AutoScalingGroupProviderUpdate|null,
     *     managedInstancesProvider?: Shapes\UpdateManagedInstancesProviderConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
