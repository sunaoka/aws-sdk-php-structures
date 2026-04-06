<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateNetworkInterface\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $TcpEstablishedTimeout
 * @property int|null $UdpStreamTimeout
 * @property int|null $UdpTimeout
 */
class ConnectionTrackingConfiguration extends Shape
{
    /**
     * @param array{
     *     TcpEstablishedTimeout?: int|null,
     *     UdpStreamTimeout?: int|null,
     *     UdpTimeout?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
