<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\ListCustomRoutingPortMappingsByDestination\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IpAddress
 * @property int<1, 65535>|null $Port
 */
class SocketAddress extends Shape
{
    /**
     * @param array{
     *     IpAddress?: string|null,
     *     Port?: int<1, 65535>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
