<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeIpv6Pools\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PoolId
 * @property string $Description
 * @property list<PoolCidrBlock> $PoolCidrBlocks
 * @property list<Tag> $Tags
 */
class Ipv6Pool extends Shape
{
    /**
     * @param array{
     *     PoolId?: string,
     *     Description?: string,
     *     PoolCidrBlocks?: list<PoolCidrBlock>,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
