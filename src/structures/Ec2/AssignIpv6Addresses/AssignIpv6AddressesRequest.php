<?php

namespace Sunaoka\Aws\Structures\Ec2\AssignIpv6Addresses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int|null $Ipv6AddressCount
 * @property list<string>|null $Ipv6Addresses
 * @property int|null $Ipv6PrefixCount
 * @property list<string>|null $Ipv6Prefixes
 * @property string $NetworkInterfaceId
 */
class AssignIpv6AddressesRequest extends Request
{
    /**
     * @param array{
     *     Ipv6AddressCount?: int|null,
     *     Ipv6Addresses?: list<string>|null,
     *     Ipv6PrefixCount?: int|null,
     *     Ipv6Prefixes?: list<string>|null,
     *     NetworkInterfaceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
