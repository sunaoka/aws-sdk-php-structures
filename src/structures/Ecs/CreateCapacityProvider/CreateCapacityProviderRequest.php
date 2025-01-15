<?php

namespace Sunaoka\Aws\Structures\Ecs\CreateCapacityProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property Shapes\AutoScalingGroupProvider $autoScalingGroupProvider
 * @property list<Shapes\Tag>|null $tags
 */
class CreateCapacityProviderRequest extends Request
{
    /**
     * @param array{
     *     name: string,
     *     autoScalingGroupProvider: Shapes\AutoScalingGroupProvider,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
