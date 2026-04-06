<?php

namespace Sunaoka\Aws\Structures\Ec2\UnassignIpv6Addresses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $Ipv6Prefixes
 * @property string $NetworkInterfaceId
 * @property list<string>|null $Ipv6Addresses
 */
class UnassignIpv6AddressesRequest extends Request
{
    /**
     * @param array{
     *     Ipv6Prefixes?: list<string>|null,
     *     NetworkInterfaceId: string,
     *     Ipv6Addresses?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
