<?php

namespace Sunaoka\Aws\Structures\Connect\AssociateRoutingProfileQueues\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RoutingProfileQueueReference $QueueReference
 * @property int $Priority
 * @property int $Delay
 */
class RoutingProfileQueueConfig extends Shape
{
    /**
     * @param array{
     *     QueueReference: RoutingProfileQueueReference,
     *     Priority: int,
     *     Delay: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
