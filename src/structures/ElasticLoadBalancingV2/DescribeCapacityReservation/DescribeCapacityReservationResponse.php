<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeCapacityReservation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property int|null $DecreaseRequestsRemaining
 * @property Shapes\MinimumLoadBalancerCapacity|null $MinimumLoadBalancerCapacity
 * @property list<Shapes\ZonalCapacityReservationState>|null $CapacityReservationState
 */
class DescribeCapacityReservationResponse extends Response
{
}
