<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NetworkInterfaceId
 * @property string $SubnetId
 * @property string $PrivateIpAddress
 * @property string $AvailabilityZone
 * @property string $Ipv6Address
 */
class NetworkInterface extends Shape
{
    /**
     * @param array{
     *     NetworkInterfaceId?: string,
     *     SubnetId?: string,
     *     PrivateIpAddress?: string,
     *     AvailabilityZone?: string,
     *     Ipv6Address?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
