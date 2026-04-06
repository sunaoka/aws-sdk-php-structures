<?php

namespace Sunaoka\Aws\Structures\Connect\ListRoutingProfileManualAssignmentQueues\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $QueueId
 * @property string $QueueArn
 * @property string $QueueName
 * @property 'VOICE'|'CHAT'|'TASK'|'EMAIL' $Channel
 */
class RoutingProfileManualAssignmentQueueConfigSummary extends Shape
{
    /**
     * @param array{
     *     QueueId: string,
     *     QueueArn: string,
     *     QueueName: string,
     *     Channel: 'VOICE'|'CHAT'|'TASK'|'EMAIL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
