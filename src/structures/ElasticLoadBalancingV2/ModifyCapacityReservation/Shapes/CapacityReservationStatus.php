<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\ModifyCapacityReservation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'provisioned'|'pending'|'rebalancing'|'failed'|null $Code
 * @property string|null $Reason
 */
class CapacityReservationStatus extends Shape
{
    /**
     * @param array{
     *     Code?: 'provisioned'|'pending'|'rebalancing'|'failed'|null,
     *     Reason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
