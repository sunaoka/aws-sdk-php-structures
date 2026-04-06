<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyNetworkInterfaceAttribute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $TcpEstablishedTimeout
 * @property int|null $UdpStreamTimeout
 * @property int|null $UdpTimeout
 */
class ConnectionTrackingSpecificationRequest extends Shape
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
