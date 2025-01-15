<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\CreateCustomRoutingListener\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ListenerArn
 * @property list<PortRange>|null $PortRanges
 */
class CustomRoutingListener extends Shape
{
    /**
     * @param array{
     *     ListenerArn?: string|null,
     *     PortRanges?: list<PortRange>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
