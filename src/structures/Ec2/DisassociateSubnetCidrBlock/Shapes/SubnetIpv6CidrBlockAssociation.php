<?php

namespace Sunaoka\Aws\Structures\Ec2\DisassociateSubnetCidrBlock\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AssociationId
 * @property string|null $Ipv6CidrBlock
 * @property SubnetCidrBlockState|null $Ipv6CidrBlockState
 * @property 'public'|'private'|null $Ipv6AddressAttribute
 * @property 'amazon'|'byoip'|'none'|null $IpSource
 */
class SubnetIpv6CidrBlockAssociation extends Shape
{
    /**
     * @param array{
     *     AssociationId?: string|null,
     *     Ipv6CidrBlock?: string|null,
     *     Ipv6CidrBlockState?: SubnetCidrBlockState|null,
     *     Ipv6AddressAttribute?: 'public'|'private'|null,
     *     IpSource?: 'amazon'|'byoip'|'none'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
