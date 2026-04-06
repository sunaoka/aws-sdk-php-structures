<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateVpcCidrBlock;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $AmazonProvidedIpv6CidrBlock
 * @property string|null $CidrBlock
 * @property string $VpcId
 * @property string|null $Ipv6CidrBlockNetworkBorderGroup
 * @property string|null $Ipv6Pool
 * @property string|null $Ipv6CidrBlock
 * @property string|null $Ipv4IpamPoolId
 * @property int|null $Ipv4NetmaskLength
 * @property string|null $Ipv6IpamPoolId
 * @property int|null $Ipv6NetmaskLength
 */
class AssociateVpcCidrBlockRequest extends Request
{
    /**
     * @param array{
     *     AmazonProvidedIpv6CidrBlock?: bool|null,
     *     CidrBlock?: string|null,
     *     VpcId: string,
     *     Ipv6CidrBlockNetworkBorderGroup?: string|null,
     *     Ipv6Pool?: string|null,
     *     Ipv6CidrBlock?: string|null,
     *     Ipv4IpamPoolId?: string|null,
     *     Ipv4NetmaskLength?: int|null,
     *     Ipv6IpamPoolId?: string|null,
     *     Ipv6NetmaskLength?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
