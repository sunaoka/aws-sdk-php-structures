<?php

namespace Sunaoka\Aws\Structures\GroundStation\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SocketAddress $socketAddress
 * @property int|null $mtu
 */
class ConnectionDetails extends Shape
{
    /**
     * @param array{
     *     socketAddress: SocketAddress,
     *     mtu?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
