<?php

namespace Sunaoka\Aws\Structures\Connect\SearchRoutingProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ROUTE_CURRENT_CHANNEL_ONLY'|'ROUTE_ANY_CHANNEL' $BehaviorType
 */
class CrossChannelBehavior extends Shape
{
    /**
     * @param array{BehaviorType: 'ROUTE_CURRENT_CHANNEL_ONLY'|'ROUTE_ANY_CHANNEL'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
