<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\DescribeCapacityReservation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LoadBalancerArn
 */
class DescribeCapacityReservationRequest extends Request
{
    /**
     * @param array{LoadBalancerArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
