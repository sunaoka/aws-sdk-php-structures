<?php

namespace Sunaoka\Aws\Structures\Ec2\DisassociateVpcCidrBlock\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AssociationId
 * @property string $CidrBlock
 * @property VpcCidrBlockState $CidrBlockState
 */
class VpcCidrBlockAssociation extends Shape
{
    /**
     * @param array{
     *     AssociationId?: string,
     *     CidrBlock?: string,
     *     CidrBlockState?: VpcCidrBlockState
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
