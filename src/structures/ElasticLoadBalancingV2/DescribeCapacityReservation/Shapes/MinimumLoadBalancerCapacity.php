<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeCapacityReservation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $CapacityUnits
 */
class MinimumLoadBalancerCapacity extends Shape
{
    /**
     * @param array{CapacityUnits?: int} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
