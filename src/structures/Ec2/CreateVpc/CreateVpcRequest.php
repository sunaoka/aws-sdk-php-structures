<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVpc;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CidrBlock
 * @property string $Ipv6Pool
 * @property string $Ipv6CidrBlock
 * @property string $Ipv4IpamPoolId
 * @property int $Ipv4NetmaskLength
 * @property string $Ipv6IpamPoolId
 * @property int $Ipv6NetmaskLength
 * @property string $Ipv6CidrBlockNetworkBorderGroup
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property bool $DryRun
 * @property 'default'|'dedicated'|'host' $InstanceTenancy
 * @property bool $AmazonProvidedIpv6CidrBlock
 */
class CreateVpcRequest extends Request
{
    /**
     * @param array{
     *     CidrBlock?: string,
     *     Ipv6Pool?: string,
     *     Ipv6CidrBlock?: string,
     *     Ipv4IpamPoolId?: string,
     *     Ipv4NetmaskLength?: int,
     *     Ipv6IpamPoolId?: string,
     *     Ipv6NetmaskLength?: int,
     *     Ipv6CidrBlockNetworkBorderGroup?: string,
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     DryRun?: bool,
     *     InstanceTenancy?: 'default'|'dedicated'|'host',
     *     AmazonProvidedIpv6CidrBlock?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
