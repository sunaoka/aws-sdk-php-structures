<?php

namespace Sunaoka\Aws\Structures\Ec2\AcceptVpcPeeringConnection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Ipv6CidrBlock
 */
class Ipv6CidrBlock extends Shape
{
    /**
     * @param array{Ipv6CidrBlock?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
