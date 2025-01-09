<?php

namespace Sunaoka\Aws\Structures\GroundStation\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $mtu
 * @property SocketAddress $socketAddress
 */
class ConnectionDetails extends Shape
{
    /**
     * @param array{
     *     mtu?: int,
     *     socketAddress: SocketAddress
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
