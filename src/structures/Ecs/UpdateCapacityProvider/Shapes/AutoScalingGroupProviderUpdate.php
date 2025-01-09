<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateCapacityProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ManagedScaling $managedScaling
 * @property 'ENABLED'|'DISABLED' $managedTerminationProtection
 * @property 'ENABLED'|'DISABLED' $managedDraining
 */
class AutoScalingGroupProviderUpdate extends Shape
{
    /**
     * @param array{
     *     managedScaling?: ManagedScaling,
     *     managedTerminationProtection?: 'ENABLED'|'DISABLED',
     *     managedDraining?: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
