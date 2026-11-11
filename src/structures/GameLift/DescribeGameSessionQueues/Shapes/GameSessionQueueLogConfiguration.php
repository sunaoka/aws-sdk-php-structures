<?php

namespace Sunaoka\Aws\Structures\GameLift\DescribeGameSessionQueues\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<LogDeliveryDestination> $DeliveryDestinations
 */
class GameSessionQueueLogConfiguration extends Shape
{
    /**
     * @param array{DeliveryDestinations: list<LogDeliveryDestination>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
