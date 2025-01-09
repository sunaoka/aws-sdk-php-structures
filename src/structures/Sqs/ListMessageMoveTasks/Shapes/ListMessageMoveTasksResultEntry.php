<?php

namespace Sunaoka\Aws\Structures\Sqs\ListMessageMoveTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TaskHandle
 * @property string $Status
 * @property string $SourceArn
 * @property string $DestinationArn
 * @property int $MaxNumberOfMessagesPerSecond
 * @property int $ApproximateNumberOfMessagesMoved
 * @property int $ApproximateNumberOfMessagesToMove
 * @property string $FailureReason
 * @property int $StartedTimestamp
 */
class ListMessageMoveTasksResultEntry extends Shape
{
    /**
     * @param array{
     *     TaskHandle?: string,
     *     Status?: string,
     *     SourceArn?: string,
     *     DestinationArn?: string,
     *     MaxNumberOfMessagesPerSecond?: int,
     *     ApproximateNumberOfMessagesMoved?: int,
     *     ApproximateNumberOfMessagesToMove?: int,
     *     FailureReason?: string,
     *     StartedTimestamp?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
