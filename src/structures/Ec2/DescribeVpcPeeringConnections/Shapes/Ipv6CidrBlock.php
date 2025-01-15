<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVpcPeeringConnections\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Ipv6CidrBlock
 */
class Ipv6CidrBlock extends Shape
{
    /**
     * @param array{Ipv6CidrBlock?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
