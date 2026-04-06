<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateCapacityProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ManagedScaling|null $managedScaling
 * @property 'ENABLED'|'DISABLED'|null $managedTerminationProtection
 */
class AutoScalingGroupProviderUpdate extends Shape
{
    /**
     * @param array{
     *     managedScaling?: ManagedScaling|null,
     *     managedTerminationProtection?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
