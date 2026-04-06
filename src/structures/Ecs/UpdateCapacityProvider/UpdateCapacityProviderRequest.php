<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateCapacityProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property Shapes\AutoScalingGroupProviderUpdate $autoScalingGroupProvider
 */
class UpdateCapacityProviderRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     autoScalingGroupProvider: Shapes\AutoScalingGroupProviderUpdate
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
