<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Ipv6Addresses
 * @property string|null $NetworkInterfaceId
 * @property string|null $PrivateDnsName
 * @property string|null $PrivateIpAddress
 * @property list<PrivateIpAddressDetails>|null $PrivateIpAddresses
 * @property string|null $PublicDnsName
 * @property string|null $PublicIp
 * @property list<SecurityGroup>|null $SecurityGroups
 * @property string|null $SubnetId
 * @property string|null $VpcId
 */
class NetworkInterface extends Shape
{
    /**
     * @param array{
     *     Ipv6Addresses?: list<string>|null,
     *     NetworkInterfaceId?: string|null,
     *     PrivateDnsName?: string|null,
     *     PrivateIpAddress?: string|null,
     *     PrivateIpAddresses?: list<PrivateIpAddressDetails>|null,
     *     PublicDnsName?: string|null,
     *     PublicIp?: string|null,
     *     SecurityGroups?: list<SecurityGroup>|null,
     *     SubnetId?: string|null,
     *     VpcId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
