<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateDefaultVpc\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AssociationId
 * @property string|null $Ipv6CidrBlock
 * @property VpcCidrBlockState|null $Ipv6CidrBlockState
 * @property string|null $NetworkBorderGroup
 * @property string|null $Ipv6Pool
 */
class VpcIpv6CidrBlockAssociation extends Shape
{
    /**
     * @param array{
     *     AssociationId?: string|null,
     *     Ipv6CidrBlock?: string|null,
     *     Ipv6CidrBlockState?: VpcCidrBlockState|null,
     *     NetworkBorderGroup?: string|null,
     *     Ipv6Pool?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
