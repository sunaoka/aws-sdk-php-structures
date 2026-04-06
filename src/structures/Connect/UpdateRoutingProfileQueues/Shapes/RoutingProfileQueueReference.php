<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateRoutingProfileQueues\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $QueueId
 * @property 'VOICE'|'CHAT'|'TASK' $Channel
 */
class RoutingProfileQueueReference extends Shape
{
    /**
     * @param array{
     *     QueueId: string,
     *     Channel: 'VOICE'|'CHAT'|'TASK'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
