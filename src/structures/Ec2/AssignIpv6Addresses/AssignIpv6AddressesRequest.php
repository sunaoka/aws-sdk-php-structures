<?php

namespace Sunaoka\Aws\Structures\Ec2\AssignIpv6Addresses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int|null $Ipv6PrefixCount
 * @property list<string>|null $Ipv6Prefixes
 * @property string $NetworkInterfaceId
 * @property list<string>|null $Ipv6Addresses
 * @property int|null $Ipv6AddressCount
 */
class AssignIpv6AddressesRequest extends Request
{
    /**
     * @param array{
     *     Ipv6PrefixCount?: int|null,
     *     Ipv6Prefixes?: list<string>|null,
     *     NetworkInterfaceId: string,
     *     Ipv6Addresses?: list<string>|null,
     *     Ipv6AddressCount?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
