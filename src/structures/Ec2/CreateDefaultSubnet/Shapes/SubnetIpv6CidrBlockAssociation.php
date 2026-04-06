<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateDefaultSubnet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AssociationId
 * @property string|null $Ipv6CidrBlock
 * @property SubnetCidrBlockState|null $Ipv6CidrBlockState
 */
class SubnetIpv6CidrBlockAssociation extends Shape
{
    /**
     * @param array{
     *     AssociationId?: string|null,
     *     Ipv6CidrBlock?: string|null,
     *     Ipv6CidrBlockState?: SubnetCidrBlockState|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
