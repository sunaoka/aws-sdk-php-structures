<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\ModifyCapacityReservation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LoadBalancerArn
 * @property Shapes\MinimumLoadBalancerCapacity $MinimumLoadBalancerCapacity
 * @property bool $ResetCapacityReservation
 */
class ModifyCapacityReservationRequest extends Request
{
    /**
     * @param array{
     *     LoadBalancerArn: string,
     *     MinimumLoadBalancerCapacity?: Shapes\MinimumLoadBalancerCapacity,
     *     ResetCapacityReservation?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
