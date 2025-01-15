<?php

namespace Sunaoka\Aws\Structures\Sqs\ListMessageMoveTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TaskHandle
 * @property string|null $Status
 * @property string|null $SourceArn
 * @property string|null $DestinationArn
 * @property int|null $MaxNumberOfMessagesPerSecond
 * @property int|null $ApproximateNumberOfMessagesMoved
 * @property int|null $ApproximateNumberOfMessagesToMove
 * @property string|null $FailureReason
 * @property int|null $StartedTimestamp
 */
class ListMessageMoveTasksResultEntry extends Shape
{
    /**
     * @param array{
     *     TaskHandle?: string|null,
     *     Status?: string|null,
     *     SourceArn?: string|null,
     *     DestinationArn?: string|null,
     *     MaxNumberOfMessagesPerSecond?: int|null,
     *     ApproximateNumberOfMessagesMoved?: int|null,
     *     ApproximateNumberOfMessagesToMove?: int|null,
     *     FailureReason?: string|null,
     *     StartedTimestamp?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
