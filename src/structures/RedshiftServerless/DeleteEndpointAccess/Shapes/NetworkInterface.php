<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\DeleteEndpointAccess\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $availabilityZone
 * @property string|null $ipv6Address
 * @property string|null $networkInterfaceId
 * @property string|null $privateIpAddress
 * @property string|null $subnetId
 */
class NetworkInterface extends Shape
{
    /**
     * @param array{
     *     availabilityZone?: string|null,
     *     ipv6Address?: string|null,
     *     networkInterfaceId?: string|null,
     *     privateIpAddress?: string|null,
     *     subnetId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
