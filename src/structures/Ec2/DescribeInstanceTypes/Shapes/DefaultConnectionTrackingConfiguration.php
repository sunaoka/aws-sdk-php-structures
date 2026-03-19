<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $DefaultTcpEstablishedTimeout
 * @property int|null $DefaultUdpTimeout
 * @property int|null $DefaultUdpStreamTimeout
 */
class DefaultConnectionTrackingConfiguration extends Shape
{
    /**
     * @param array{
     *     DefaultTcpEstablishedTimeout?: int|null,
     *     DefaultUdpTimeout?: int|null,
     *     DefaultUdpStreamTimeout?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
