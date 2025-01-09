<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVpcPeeringConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CidrBlock
 */
class CidrBlock extends Shape
{
    /**
     * @param array{CidrBlock?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
