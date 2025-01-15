<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AssociationId
 * @property string|null $CidrBlock
 * @property VpcCidrBlockState|null $CidrBlockState
 */
class VpcCidrBlockAssociation extends Shape
{
    /**
     * @param array{
     *     AssociationId?: string|null,
     *     CidrBlock?: string|null,
     *     CidrBlockState?: VpcCidrBlockState|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
