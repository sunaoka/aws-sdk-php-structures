<?php

namespace Sunaoka\Aws\Structures\Connect\ListRoutingProfileQueues\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $QueueId
 * @property string $QueueArn
 * @property string $QueueName
 * @property int<1, 99> $Priority
 * @property int<0, 9999> $Delay
 * @property 'VOICE'|'CHAT'|'TASK'|'EMAIL' $Channel
 */
class RoutingProfileQueueConfigSummary extends Shape
{
    /**
     * @param array{
     *     QueueId: string,
     *     QueueArn: string,
     *     QueueName: string,
     *     Priority: int<1, 99>,
     *     Delay: int<0, 9999>,
     *     Channel: 'VOICE'|'CHAT'|'TASK'|'EMAIL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
