<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\ModifyCapacityReservation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $CapacityUnits
 */
class MinimumLoadBalancerCapacity extends Shape
{
    /**
     * @param array{CapacityUnits?: int|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
