<?php

namespace Sunaoka\Aws\Structures\EventBridge\ListReplays\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ReplayName
 * @property string|null $EventSourceArn
 * @property 'STARTING'|'RUNNING'|'CANCELLING'|'COMPLETED'|'CANCELLED'|'FAILED'|null $State
 * @property string|null $StateReason
 * @property \Aws\Api\DateTimeResult|null $EventStartTime
 * @property \Aws\Api\DateTimeResult|null $EventEndTime
 * @property \Aws\Api\DateTimeResult|null $EventLastReplayedTime
 * @property \Aws\Api\DateTimeResult|null $ReplayStartTime
 * @property \Aws\Api\DateTimeResult|null $ReplayEndTime
 */
class Replay extends Shape
{
    /**
     * @param array{
     *     ReplayName?: string|null,
     *     EventSourceArn?: string|null,
     *     State?: 'STARTING'|'RUNNING'|'CANCELLING'|'COMPLETED'|'CANCELLED'|'FAILED'|null,
     *     StateReason?: string|null,
     *     EventStartTime?: \Aws\Api\DateTimeResult|null,
     *     EventEndTime?: \Aws\Api\DateTimeResult|null,
     *     EventLastReplayedTime?: \Aws\Api\DateTimeResult|null,
     *     ReplayStartTime?: \Aws\Api\DateTimeResult|null,
     *     ReplayEndTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
