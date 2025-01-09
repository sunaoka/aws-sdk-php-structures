<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateVpcCidrBlock;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CidrBlock
 * @property string $Ipv6CidrBlockNetworkBorderGroup
 * @property string $Ipv6Pool
 * @property string $Ipv6CidrBlock
 * @property string $Ipv4IpamPoolId
 * @property int $Ipv4NetmaskLength
 * @property string $Ipv6IpamPoolId
 * @property int $Ipv6NetmaskLength
 * @property string $VpcId
 * @property bool $AmazonProvidedIpv6CidrBlock
 */
class AssociateVpcCidrBlockRequest extends Request
{
    /**
     * @param array{
     *     CidrBlock?: string,
     *     Ipv6CidrBlockNetworkBorderGroup?: string,
     *     Ipv6Pool?: string,
     *     Ipv6CidrBlock?: string,
     *     Ipv4IpamPoolId?: string,
     *     Ipv4NetmaskLength?: int,
     *     Ipv6IpamPoolId?: string,
     *     Ipv6NetmaskLength?: int,
     *     VpcId: string,
     *     AmazonProvidedIpv6CidrBlock?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
