<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyEndpointAccess\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $NetworkInterfaceId
 * @property string|null $SubnetId
 * @property string|null $PrivateIpAddress
 * @property string|null $AvailabilityZone
 * @property string|null $Ipv6Address
 */
class NetworkInterface extends Shape
{
    /**
     * @param array{
     *     NetworkInterfaceId?: string|null,
     *     SubnetId?: string|null,
     *     PrivateIpAddress?: string|null,
     *     AvailabilityZone?: string|null,
     *     Ipv6Address?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
