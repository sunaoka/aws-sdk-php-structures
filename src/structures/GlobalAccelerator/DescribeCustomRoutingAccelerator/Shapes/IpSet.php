<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\DescribeCustomRoutingAccelerator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IpFamily
 * @property list<string>|null $IpAddresses
 * @property 'IPv4'|'IPv6'|null $IpAddressFamily
 * @property list<IpAddressDetail>|null $IpAddressDetails
 */
class IpSet extends Shape
{
    /**
     * @param array{
     *     IpFamily?: string|null,
     *     IpAddresses?: list<string>|null,
     *     IpAddressFamily?: 'IPv4'|'IPv6'|null,
     *     IpAddressDetails?: list<IpAddressDetail>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
