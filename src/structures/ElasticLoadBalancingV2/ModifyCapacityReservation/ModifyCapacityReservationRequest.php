<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\ModifyCapacityReservation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LoadBalancerArn
 * @property Shapes\MinimumLoadBalancerCapacity|null $MinimumLoadBalancerCapacity
 * @property bool|null $ResetCapacityReservation
 */
class ModifyCapacityReservationRequest extends Request
{
    /**
     * @param array{
     *     LoadBalancerArn: string,
     *     MinimumLoadBalancerCapacity?: Shapes\MinimumLoadBalancerCapacity|null,
     *     ResetCapacityReservation?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
