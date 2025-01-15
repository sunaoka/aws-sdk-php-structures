<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeIpv6Pools\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PoolId
 * @property string|null $Description
 * @property list<PoolCidrBlock>|null $PoolCidrBlocks
 * @property list<Tag>|null $Tags
 */
class Ipv6Pool extends Shape
{
    /**
     * @param array{
     *     PoolId?: string|null,
     *     Description?: string|null,
     *     PoolCidrBlocks?: list<PoolCidrBlock>|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
