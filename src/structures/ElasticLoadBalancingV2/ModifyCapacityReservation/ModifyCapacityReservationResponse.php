<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\ModifyCapacityReservation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property int $DecreaseRequestsRemaining
 * @property Shapes\MinimumLoadBalancerCapacity $MinimumLoadBalancerCapacity
 * @property list<Shapes\ZonalCapacityReservationState> $CapacityReservationState
 */
class ModifyCapacityReservationResponse extends Response
{
}
