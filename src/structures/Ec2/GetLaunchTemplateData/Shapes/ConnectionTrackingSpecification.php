<?php

namespace Sunaoka\Aws\Structures\Ec2\GetLaunchTemplateData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $TcpEstablishedTimeout
 * @property int $UdpTimeout
 * @property int $UdpStreamTimeout
 */
class ConnectionTrackingSpecification extends Shape
{
    /**
     * @param array{
     *     TcpEstablishedTimeout?: int,
     *     UdpTimeout?: int,
     *     UdpStreamTimeout?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
