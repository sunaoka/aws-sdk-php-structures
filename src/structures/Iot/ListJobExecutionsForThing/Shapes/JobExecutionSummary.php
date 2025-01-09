<?php

namespace Sunaoka\Aws\Structures\Iot\ListJobExecutionsForThing\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'QUEUED'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'TIMED_OUT'|'REJECTED'|'REMOVED'|'CANCELED' $status
 * @property \Aws\Api\DateTimeResult $queuedAt
 * @property \Aws\Api\DateTimeResult $startedAt
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property int $executionNumber
 * @property int $retryAttempt
 */
class JobExecutionSummary extends Shape
{
    /**
     * @param array{
     *     status?: 'QUEUED'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'TIMED_OUT'|'REJECTED'|'REMOVED'|'CANCELED',
     *     queuedAt?: \Aws\Api\DateTimeResult,
     *     startedAt?: \Aws\Api\DateTimeResult,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult,
     *     executionNumber?: int,
     *     retryAttempt?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
