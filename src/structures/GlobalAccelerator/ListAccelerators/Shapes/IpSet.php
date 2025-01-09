<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\ListAccelerators\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IpFamily
 * @property list<string> $IpAddresses
 * @property 'IPv4'|'IPv6' $IpAddressFamily
 */
class IpSet extends Shape
{
    /**
     * @param array{
     *     IpFamily?: string,
     *     IpAddresses?: list<string>,
     *     IpAddressFamily?: 'IPv4'|'IPv6'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
