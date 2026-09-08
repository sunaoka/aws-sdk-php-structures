<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeRoutingProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ROUTE_CURRENT_CHANNEL_CURRENT_WORKLOADTYPE_ONLY'|'ROUTE_CURRENT_CHANNEL_ANY_WORKLOADTYPE_ONLY'|'ROUTE_ANY_CHANNEL_ANY_WORKLOAD_TYPE'|null $ChannelWorkloadBehaviorType
 */
class CrossChannelWorkloadBehavior extends Shape
{
    /**
     * @param array{ChannelWorkloadBehaviorType?: 'ROUTE_CURRENT_CHANNEL_CURRENT_WORKLOADTYPE_ONLY'|'ROUTE_CURRENT_CHANNEL_ANY_WORKLOADTYPE_ONLY'|'ROUTE_ANY_CHANNEL_ANY_WORKLOAD_TYPE'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
