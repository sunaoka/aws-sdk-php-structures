<?php

namespace Sunaoka\Aws\Structures\Ec2\AssignIpv6Addresses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $Ipv6PrefixCount
 * @property list<string> $Ipv6Prefixes
 * @property string $NetworkInterfaceId
 * @property list<string> $Ipv6Addresses
 * @property int $Ipv6AddressCount
 */
class AssignIpv6AddressesRequest extends Request
{
    /**
     * @param array{
     *     Ipv6PrefixCount?: int,
     *     Ipv6Prefixes?: list<string>,
     *     NetworkInterfaceId: string,
     *     Ipv6Addresses?: list<string>,
     *     Ipv6AddressCount?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
