<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PAUSED'|'ACTIVE' $Status
 */
class Rebalancing extends Shape
{
    /**
     * @param array{Status: 'PAUSED'|'ACTIVE'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
