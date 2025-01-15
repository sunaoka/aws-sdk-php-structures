<?php

namespace Sunaoka\Aws\Structures\StorageGateway\DescribeGatewayInformation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Ipv4Address
 * @property string|null $MacAddress
 * @property string|null $Ipv6Address
 */
class NetworkInterface extends Shape
{
    /**
     * @param array{
     *     Ipv4Address?: string|null,
     *     MacAddress?: string|null,
     *     Ipv6Address?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
