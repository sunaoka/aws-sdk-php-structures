<?php

namespace Sunaoka\Aws\Structures\GroundStation\GetDataflowEndpointGroup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $mtu
 * @property SocketAddress $socketAddress
 */
class ConnectionDetails extends Shape
{
    /**
     * @param array{
     *     mtu?: int|null,
     *     socketAddress: SocketAddress
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
