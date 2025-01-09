<?php

namespace Sunaoka\Aws\Structures\Inspector\DescribeFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $networkInterfaceId
 * @property string $subnetId
 * @property string $vpcId
 * @property string $privateDnsName
 * @property string $privateIpAddress
 * @property list<PrivateIp> $privateIpAddresses
 * @property string $publicDnsName
 * @property string $publicIp
 * @property list<string> $ipv6Addresses
 * @property list<SecurityGroup> $securityGroups
 */
class NetworkInterface extends Shape
{
    /**
     * @param array{
     *     networkInterfaceId?: string,
     *     subnetId?: string,
     *     vpcId?: string,
     *     privateDnsName?: string,
     *     privateIpAddress?: string,
     *     privateIpAddresses?: list<PrivateIp>,
     *     publicDnsName?: string,
     *     publicIp?: string,
     *     ipv6Addresses?: list<string>,
     *     securityGroups?: list<SecurityGroup>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
