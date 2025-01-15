<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateNetworkInterface\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NetworkInterfaceAssociation|null $Association
 * @property bool|null $Primary
 * @property string|null $PrivateDnsName
 * @property string|null $PrivateIpAddress
 */
class NetworkInterfacePrivateIpAddress extends Shape
{
    /**
     * @param array{
     *     Association?: NetworkInterfaceAssociation|null,
     *     Primary?: bool|null,
     *     PrivateDnsName?: string|null,
     *     PrivateIpAddress?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
