<?php

namespace Sunaoka\Aws\Structures\Ec2\AssignPrivateIpAddresses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $Ipv4Prefixes
 * @property int|null $Ipv4PrefixCount
 * @property string $NetworkInterfaceId
 * @property list<string>|null $PrivateIpAddresses
 * @property int|null $SecondaryPrivateIpAddressCount
 * @property bool|null $AllowReassignment
 */
class AssignPrivateIpAddressesRequest extends Request
{
    /**
     * @param array{
     *     Ipv4Prefixes?: list<string>|null,
     *     Ipv4PrefixCount?: int|null,
     *     NetworkInterfaceId: string,
     *     PrivateIpAddresses?: list<string>|null,
     *     SecondaryPrivateIpAddressCount?: int|null,
     *     AllowReassignment?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
