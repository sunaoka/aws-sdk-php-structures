<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\ModifyCapacityReservation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'provisioned'|'pending'|'rebalancing'|'failed' $Code
 * @property string $Reason
 */
class CapacityReservationStatus extends Shape
{
    /**
     * @param array{
     *     Code?: 'provisioned'|'pending'|'rebalancing'|'failed',
     *     Reason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
