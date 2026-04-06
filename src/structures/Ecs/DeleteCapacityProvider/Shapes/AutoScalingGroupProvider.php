<?php

namespace Sunaoka\Aws\Structures\Ecs\DeleteCapacityProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $autoScalingGroupArn
 * @property ManagedScaling|null $managedScaling
 * @property 'ENABLED'|'DISABLED'|null $managedTerminationProtection
 */
class AutoScalingGroupProvider extends Shape
{
    /**
     * @param array{
     *     autoScalingGroupArn: string,
     *     managedScaling?: ManagedScaling|null,
     *     managedTerminationProtection?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
