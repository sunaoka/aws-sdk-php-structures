<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\CreateCustomRoutingListener\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ListenerArn
 * @property list<PortRange> $PortRanges
 */
class CustomRoutingListener extends Shape
{
    /**
     * @param array{
     *     ListenerArn?: string,
     *     PortRanges?: list<PortRange>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
