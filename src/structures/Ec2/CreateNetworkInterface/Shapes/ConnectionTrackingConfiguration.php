<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateNetworkInterface\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $TcpEstablishedTimeout
 * @property int $UdpStreamTimeout
 * @property int $UdpTimeout
 */
class ConnectionTrackingConfiguration extends Shape
{
    /**
     * @param array{
     *     TcpEstablishedTimeout?: int,
     *     UdpStreamTimeout?: int,
     *     UdpTimeout?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
