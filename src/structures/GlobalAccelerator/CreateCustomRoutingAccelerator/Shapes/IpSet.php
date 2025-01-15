<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\CreateCustomRoutingAccelerator\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IpFamily
 * @property list<string>|null $IpAddresses
 * @property 'IPv4'|'IPv6'|null $IpAddressFamily
 */
class IpSet extends Shape
{
    /**
     * @param array{
     *     IpFamily?: string|null,
     *     IpAddresses?: list<string>|null,
     *     IpAddressFamily?: 'IPv4'|'IPv6'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
