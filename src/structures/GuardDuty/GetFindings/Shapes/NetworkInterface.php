<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Ipv6Addresses
 * @property string $NetworkInterfaceId
 * @property string $PrivateDnsName
 * @property string $PrivateIpAddress
 * @property list<PrivateIpAddressDetails> $PrivateIpAddresses
 * @property string $PublicDnsName
 * @property string $PublicIp
 * @property list<SecurityGroup> $SecurityGroups
 * @property string $SubnetId
 * @property string $VpcId
 */
class NetworkInterface extends Shape
{
    /**
     * @param array{
     *     Ipv6Addresses?: list<string>,
     *     NetworkInterfaceId?: string,
     *     PrivateDnsName?: string,
     *     PrivateIpAddress?: string,
     *     PrivateIpAddresses?: list<PrivateIpAddressDetails>,
     *     PublicDnsName?: string,
     *     PublicIp?: string,
     *     SecurityGroups?: list<SecurityGroup>,
     *     SubnetId?: string,
     *     VpcId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
