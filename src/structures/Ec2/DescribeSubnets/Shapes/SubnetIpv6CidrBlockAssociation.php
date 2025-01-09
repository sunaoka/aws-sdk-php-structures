<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSubnets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AssociationId
 * @property string $Ipv6CidrBlock
 * @property SubnetCidrBlockState $Ipv6CidrBlockState
 * @property 'public'|'private' $Ipv6AddressAttribute
 * @property 'amazon'|'byoip'|'none' $IpSource
 */
class SubnetIpv6CidrBlockAssociation extends Shape
{
    /**
     * @param array{
     *     AssociationId?: string,
     *     Ipv6CidrBlock?: string,
     *     Ipv6CidrBlockState?: SubnetCidrBlockState,
     *     Ipv6AddressAttribute?: 'public'|'private',
     *     IpSource?: 'amazon'|'byoip'|'none'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
