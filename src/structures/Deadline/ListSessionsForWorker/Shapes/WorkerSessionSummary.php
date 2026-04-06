<?php

namespace Sunaoka\Aws\Structures\Deadline\ListSessionsForWorker\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $endedAt
 * @property string $jobId
 * @property 'STARTED'|'UPDATE_IN_PROGRESS'|'UPDATE_SUCCEEDED'|'UPDATE_FAILED'|'ENDED' $lifecycleStatus
 * @property string $queueId
 * @property string $sessionId
 * @property \Aws\Api\DateTimeResult $startedAt
 * @property 'ENDED'|null $targetLifecycleStatus
 */
class WorkerSessionSummary extends Shape
{
    /**
     * @param array{
     *     endedAt?: \Aws\Api\DateTimeResult|null,
     *     jobId: string,
     *     lifecycleStatus: 'STARTED'|'UPDATE_IN_PROGRESS'|'UPDATE_SUCCEEDED'|'UPDATE_FAILED'|'ENDED',
     *     queueId: string,
     *     sessionId: string,
     *     startedAt: \Aws\Api\DateTimeResult,
     *     targetLifecycleStatus?: 'ENDED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
