<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateRoutingProfileQueues\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RoutingProfileQueueReference $QueueReference
 * @property int<1, 99> $Priority
 * @property int<0, 9999> $Delay
 */
class RoutingProfileQueueConfig extends Shape
{
    /**
     * @param array{
     *     QueueReference: RoutingProfileQueueReference,
     *     Priority: int<1, 99>,
     *     Delay: int<0, 9999>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
