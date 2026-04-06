<?php

namespace Sunaoka\Aws\Structures\WorkspacesInstances\CreateVolume\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'instance'|'volume'|'spot-instances-request'|'network-interface'|null $ResourceType
 * @property list<Tag>|null $Tags
 */
class TagSpecification extends Shape
{
    /**
     * @param array{
     *     ResourceType?: 'instance'|'volume'|'spot-instances-request'|'network-interface'|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
