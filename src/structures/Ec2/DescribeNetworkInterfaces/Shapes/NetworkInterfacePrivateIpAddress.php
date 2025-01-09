<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkInterfaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NetworkInterfaceAssociation $Association
 * @property bool $Primary
 * @property string $PrivateDnsName
 * @property string $PrivateIpAddress
 */
class NetworkInterfacePrivateIpAddress extends Shape
{
    /**
     * @param array{
     *     Association?: NetworkInterfaceAssociation,
     *     Primary?: bool,
     *     PrivateDnsName?: string,
     *     PrivateIpAddress?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
