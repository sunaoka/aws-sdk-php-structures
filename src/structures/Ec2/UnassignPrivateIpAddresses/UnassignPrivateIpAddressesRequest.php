<?php

namespace Sunaoka\Aws\Structures\Ec2\UnassignPrivateIpAddresses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $Ipv4Prefixes
 * @property string $NetworkInterfaceId
 * @property list<string>|null $PrivateIpAddresses
 */
class UnassignPrivateIpAddressesRequest extends Request
{
    /**
     * @param array{
     *     Ipv4Prefixes?: list<string>|null,
     *     NetworkInterfaceId: string,
     *     PrivateIpAddresses?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
