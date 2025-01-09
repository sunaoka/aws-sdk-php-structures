<?php

namespace Sunaoka\Aws\Structures\Connect\DisassociateRoutingProfileQueues\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $QueueId
 * @property 'VOICE'|'CHAT'|'TASK'|'EMAIL' $Channel
 */
class RoutingProfileQueueReference extends Shape
{
    /**
     * @param array{
     *     QueueId: string,
     *     Channel: 'VOICE'|'CHAT'|'TASK'|'EMAIL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
