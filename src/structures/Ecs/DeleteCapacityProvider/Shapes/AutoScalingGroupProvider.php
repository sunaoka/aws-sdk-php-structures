<?php

namespace Sunaoka\Aws\Structures\Ecs\DeleteCapacityProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $autoScalingGroupArn
 * @property ManagedScaling $managedScaling
 * @property 'ENABLED'|'DISABLED' $managedTerminationProtection
 * @property 'ENABLED'|'DISABLED' $managedDraining
 */
class AutoScalingGroupProvider extends Shape
{
    /**
     * @param array{
     *     autoScalingGroupArn: string,
     *     managedScaling?: ManagedScaling,
     *     managedTerminationProtection?: 'ENABLED'|'DISABLED',
     *     managedDraining?: 'ENABLED'|'DISABLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
