<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeCapacityReservation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property int $DecreaseRequestsRemaining
 * @property Shapes\MinimumLoadBalancerCapacity $MinimumLoadBalancerCapacity
 * @property list<Shapes\ZonalCapacityReservationState> $CapacityReservationState
 */
class DescribeCapacityReservationResponse extends Response
{
}
