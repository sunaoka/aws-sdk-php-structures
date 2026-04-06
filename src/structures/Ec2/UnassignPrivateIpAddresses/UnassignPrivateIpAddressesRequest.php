<?php

namespace Sunaoka\Aws\Structures\Ec2\UnassignPrivateIpAddresses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NetworkInterfaceId
 * @property list<string>|null $PrivateIpAddresses
 * @property list<string>|null $Ipv4Prefixes
 */
class UnassignPrivateIpAddressesRequest extends Request
{
    /**
     * @param array{
     *     NetworkInterfaceId: string,
     *     PrivateIpAddresses?: list<string>|null,
     *     Ipv4Prefixes?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
