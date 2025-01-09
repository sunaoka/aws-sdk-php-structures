<?php

namespace Sunaoka\Aws\Structures\Ec2\AssignPrivateIpAddresses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $Ipv4Prefixes
 * @property int $Ipv4PrefixCount
 * @property string $NetworkInterfaceId
 * @property list<string> $PrivateIpAddresses
 * @property int $SecondaryPrivateIpAddressCount
 * @property bool $AllowReassignment
 */
class AssignPrivateIpAddressesRequest extends Request
{
    /**
     * @param array{
     *     Ipv4Prefixes?: list<string>,
     *     Ipv4PrefixCount?: int,
     *     NetworkInterfaceId: string,
     *     PrivateIpAddresses?: list<string>,
     *     SecondaryPrivateIpAddressCount?: int,
     *     AllowReassignment?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
