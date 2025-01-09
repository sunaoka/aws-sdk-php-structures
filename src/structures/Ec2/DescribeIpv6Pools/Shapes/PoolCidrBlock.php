<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeIpv6Pools\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Cidr
 */
class PoolCidrBlock extends Shape
{
    /**
     * @param array{Cidr?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
