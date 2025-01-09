<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\ListCustomRoutingPortMappings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IpAddress
 * @property int<1, 65535> $Port
 */
class SocketAddress extends Shape
{
    /**
     * @param array{
     *     IpAddress?: string,
     *     Port?: int<1, 65535>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
