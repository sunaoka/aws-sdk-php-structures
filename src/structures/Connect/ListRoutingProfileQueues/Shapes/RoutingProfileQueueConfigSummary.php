<?php

namespace Sunaoka\Aws\Structures\Connect\ListRoutingProfileQueues\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $QueueId
 * @property string $QueueArn
 * @property string $QueueName
 * @property int $Priority
 * @property int $Delay
 * @property 'VOICE'|'CHAT'|'TASK'|'EMAIL' $Channel
 */
class RoutingProfileQueueConfigSummary extends Shape
{
    /**
     * @param array{
     *     QueueId: string,
     *     QueueArn: string,
     *     QueueName: string,
     *     Priority: int,
     *     Delay: int,
     *     Channel: 'VOICE'|'CHAT'|'TASK'|'EMAIL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
