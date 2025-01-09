<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\ListEndpointAccess\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $availabilityZone
 * @property string $ipv6Address
 * @property string $networkInterfaceId
 * @property string $privateIpAddress
 * @property string $subnetId
 */
class NetworkInterface extends Shape
{
    /**
     * @param array{
     *     availabilityZone?: string,
     *     ipv6Address?: string,
     *     networkInterfaceId?: string,
     *     privateIpAddress?: string,
     *     subnetId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
