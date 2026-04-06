<?php

namespace Sunaoka\Aws\Structures\Ec2\GetLaunchTemplateData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $TcpEstablishedTimeout
 * @property int|null $UdpTimeout
 * @property int|null $UdpStreamTimeout
 */
class ConnectionTrackingSpecification extends Shape
{
    /**
     * @param array{
     *     TcpEstablishedTimeout?: int|null,
     *     UdpTimeout?: int|null,
     *     UdpStreamTimeout?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
