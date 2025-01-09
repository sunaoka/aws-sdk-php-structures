<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateVpcCidrBlock\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AssociationId
 * @property string $Ipv6CidrBlock
 * @property VpcCidrBlockState $Ipv6CidrBlockState
 * @property string $NetworkBorderGroup
 * @property string $Ipv6Pool
 * @property 'public'|'private' $Ipv6AddressAttribute
 * @property 'amazon'|'byoip'|'none' $IpSource
 */
class VpcIpv6CidrBlockAssociation extends Shape
{
    /**
     * @param array{
     *     AssociationId?: string,
     *     Ipv6CidrBlock?: string,
     *     Ipv6CidrBlockState?: VpcCidrBlockState,
     *     NetworkBorderGroup?: string,
     *     Ipv6Pool?: string,
     *     Ipv6AddressAttribute?: 'public'|'private',
     *     IpSource?: 'amazon'|'byoip'|'none'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
