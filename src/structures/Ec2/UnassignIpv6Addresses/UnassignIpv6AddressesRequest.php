<?php

namespace Sunaoka\Aws\Structures\Ec2\UnassignIpv6Addresses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $Ipv6Prefixes
 * @property string $NetworkInterfaceId
 * @property list<string> $Ipv6Addresses
 */
class UnassignIpv6AddressesRequest extends Request
{
    /**
     * @param array{
     *     Ipv6Prefixes?: list<string>,
     *     NetworkInterfaceId: string,
     *     Ipv6Addresses?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
