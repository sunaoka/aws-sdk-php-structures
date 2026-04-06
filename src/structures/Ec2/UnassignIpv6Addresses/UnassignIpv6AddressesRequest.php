<?php

namespace Sunaoka\Aws\Structures\Ec2\UnassignIpv6Addresses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $Ipv6Addresses
 * @property list<string>|null $Ipv6Prefixes
 * @property string $NetworkInterfaceId
 */
class UnassignIpv6AddressesRequest extends Request
{
    /**
     * @param array{
     *     Ipv6Addresses?: list<string>|null,
     *     Ipv6Prefixes?: list<string>|null,
     *     NetworkInterfaceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
