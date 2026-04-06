<?php

namespace Sunaoka\Aws\Structures\Ec2\AssignPrivateIpAddresses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $AllowReassignment
 * @property string $NetworkInterfaceId
 * @property list<string>|null $PrivateIpAddresses
 * @property int|null $SecondaryPrivateIpAddressCount
 * @property list<string>|null $Ipv4Prefixes
 * @property int|null $Ipv4PrefixCount
 */
class AssignPrivateIpAddressesRequest extends Request
{
    /**
     * @param array{
     *     AllowReassignment?: bool|null,
     *     NetworkInterfaceId: string,
     *     PrivateIpAddresses?: list<string>|null,
     *     SecondaryPrivateIpAddressCount?: int|null,
     *     Ipv4Prefixes?: list<string>|null,
     *     Ipv4PrefixCount?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
