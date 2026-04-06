<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\SendMessage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SendMessageResponseCreatedEvent|null $responseCreated
 * @property SendMessageResponseInProgressEvent|null $responseInProgress
 * @property SendMessageResponseCompletedEvent|null $responseCompleted
 * @property SendMessageResponseFailedEvent|null $responseFailed
 * @property SendMessageSummaryEvent|null $summary
 * @property SendMessageHeartbeatEvent|null $heartbeat
 * @property SendMessageContentBlockStartEvent|null $contentBlockStart
 * @property SendMessageContentBlockDeltaEvent|null $contentBlockDelta
 * @property SendMessageContentBlockStopEvent|null $contentBlockStop
 */
class SendMessageEvents extends Shape
{
    /**
     * @param array{
     *     responseCreated?: SendMessageResponseCreatedEvent|null,
     *     responseInProgress?: SendMessageResponseInProgressEvent|null,
     *     responseCompleted?: SendMessageResponseCompletedEvent|null,
     *     responseFailed?: SendMessageResponseFailedEvent|null,
     *     summary?: SendMessageSummaryEvent|null,
     *     heartbeat?: SendMessageHeartbeatEvent|null,
     *     contentBlockStart?: SendMessageContentBlockStartEvent|null,
     *     contentBlockDelta?: SendMessageContentBlockDeltaEvent|null,
     *     contentBlockStop?: SendMessageContentBlockStopEvent|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
