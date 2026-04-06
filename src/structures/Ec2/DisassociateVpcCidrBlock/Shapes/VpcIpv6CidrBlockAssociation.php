<?php

namespace Sunaoka\Aws\Structures\Ec2\DisassociateVpcCidrBlock\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AssociationId
 * @property string|null $Ipv6CidrBlock
 * @property VpcCidrBlockState|null $Ipv6CidrBlockState
 * @property string|null $NetworkBorderGroup
 * @property string|null $Ipv6Pool
 * @property 'public'|'private'|null $Ipv6AddressAttribute
 * @property 'amazon'|'byoip'|'none'|null $IpSource
 */
class VpcIpv6CidrBlockAssociation extends Shape
{
    /**
     * @param array{
     *     AssociationId?: string|null,
     *     Ipv6CidrBlock?: string|null,
     *     Ipv6CidrBlockState?: VpcCidrBlockState|null,
     *     NetworkBorderGroup?: string|null,
     *     Ipv6Pool?: string|null,
     *     Ipv6AddressAttribute?: 'public'|'private'|null,
     *     IpSource?: 'amazon'|'byoip'|'none'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
