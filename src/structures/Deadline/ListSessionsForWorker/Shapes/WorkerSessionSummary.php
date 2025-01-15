<?php

namespace Sunaoka\Aws\Structures\Deadline\ListSessionsForWorker\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $sessionId
 * @property string $queueId
 * @property string $jobId
 * @property \Aws\Api\DateTimeResult $startedAt
 * @property 'STARTED'|'UPDATE_IN_PROGRESS'|'UPDATE_SUCCEEDED'|'UPDATE_FAILED'|'ENDED' $lifecycleStatus
 * @property \Aws\Api\DateTimeResult|null $endedAt
 * @property 'ENDED'|null $targetLifecycleStatus
 */
class WorkerSessionSummary extends Shape
{
    /**
     * @param array{
     *     sessionId: string,
     *     queueId: string,
     *     jobId: string,
     *     startedAt: \Aws\Api\DateTimeResult,
     *     lifecycleStatus: 'STARTED'|'UPDATE_IN_PROGRESS'|'UPDATE_SUCCEEDED'|'UPDATE_FAILED'|'ENDED',
     *     endedAt?: \Aws\Api\DateTimeResult|null,
     *     targetLifecycleStatus?: 'ENDED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
