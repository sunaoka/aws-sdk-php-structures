<?php

namespace Sunaoka\Aws\Structures\Ec2\UnassignPrivateIpAddresses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $Ipv4Prefixes
 * @property string $NetworkInterfaceId
 * @property list<string> $PrivateIpAddresses
 */
class UnassignPrivateIpAddressesRequest extends Request
{
    /**
     * @param array{
     *     Ipv4Prefixes?: list<string>,
     *     NetworkInterfaceId: string,
     *     PrivateIpAddresses?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
