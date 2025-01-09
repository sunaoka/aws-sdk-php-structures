<?php

namespace Sunaoka\Aws\Structures\EventBridge\ListReplays\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ReplayName
 * @property string $EventSourceArn
 * @property 'STARTING'|'RUNNING'|'CANCELLING'|'COMPLETED'|'CANCELLED'|'FAILED' $State
 * @property string $StateReason
 * @property \Aws\Api\DateTimeResult $EventStartTime
 * @property \Aws\Api\DateTimeResult $EventEndTime
 * @property \Aws\Api\DateTimeResult $EventLastReplayedTime
 * @property \Aws\Api\DateTimeResult $ReplayStartTime
 * @property \Aws\Api\DateTimeResult $ReplayEndTime
 */
class Replay extends Shape
{
    /**
     * @param array{
     *     ReplayName?: string,
     *     EventSourceArn?: string,
     *     State?: 'STARTING'|'RUNNING'|'CANCELLING'|'COMPLETED'|'CANCELLED'|'FAILED',
     *     StateReason?: string,
     *     EventStartTime?: \Aws\Api\DateTimeResult,
     *     EventEndTime?: \Aws\Api\DateTimeResult,
     *     EventLastReplayedTime?: \Aws\Api\DateTimeResult,
     *     ReplayStartTime?: \Aws\Api\DateTimeResult,
     *     ReplayEndTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
