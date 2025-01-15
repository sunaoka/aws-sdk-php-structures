<?php

namespace Sunaoka\Aws\Structures\Inspector\DescribeFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $networkInterfaceId
 * @property string|null $subnetId
 * @property string|null $vpcId
 * @property string|null $privateDnsName
 * @property string|null $privateIpAddress
 * @property list<PrivateIp>|null $privateIpAddresses
 * @property string|null $publicDnsName
 * @property string|null $publicIp
 * @property list<string>|null $ipv6Addresses
 * @property list<SecurityGroup>|null $securityGroups
 */
class NetworkInterface extends Shape
{
    /**
     * @param array{
     *     networkInterfaceId?: string|null,
     *     subnetId?: string|null,
     *     vpcId?: string|null,
     *     privateDnsName?: string|null,
     *     privateIpAddress?: string|null,
     *     privateIpAddresses?: list<PrivateIp>|null,
     *     publicDnsName?: string|null,
     *     publicIp?: string|null,
     *     ipv6Addresses?: list<string>|null,
     *     securityGroups?: list<SecurityGroup>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
