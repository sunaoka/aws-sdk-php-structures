<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeGatewayInformation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Ipv4Address
 * @property string $MacAddress
 * @property string $Ipv6Address
 */
class NetworkInterface extends Shape
{
    /**
     * @param array{
     *     Ipv4Address?: string,
     *     MacAddress?: string,
     *     Ipv6Address?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
