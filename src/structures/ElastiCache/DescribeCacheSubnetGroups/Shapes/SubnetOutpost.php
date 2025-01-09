<?php

namespace Sunaoka\Aws\Structures\ElastiCache\DescribeCacheSubnetGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SubnetOutpostArn
 */
class SubnetOutpost extends Shape
{
    /**
     * @param array{SubnetOutpostArn?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
