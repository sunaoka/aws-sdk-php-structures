<?php

namespace Sunaoka\Aws\Structures\Connect\AssociateRoutingProfileQueues\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RoutingProfileQueueReference $QueueReference
 */
class RoutingProfileManualAssignmentQueueConfig extends Shape
{
    /**
     * @param array{QueueReference: RoutingProfileQueueReference} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
