<?php

namespace Sunaoka\Aws\Structures\Iot\ListJobExecutionsForJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'QUEUED'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'TIMED_OUT'|'REJECTED'|'REMOVED'|'CANCELED'|null $status
 * @property \Aws\Api\DateTimeResult|null $queuedAt
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property int|null $executionNumber
 * @property int|null $retryAttempt
 */
class JobExecutionSummary extends Shape
{
    /**
     * @param array{
     *     status?: 'QUEUED'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'TIMED_OUT'|'REJECTED'|'REMOVED'|'CANCELED'|null,
     *     queuedAt?: \Aws\Api\DateTimeResult|null,
     *     startedAt?: \Aws\Api\DateTimeResult|null,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     executionNumber?: int|null,
     *     retryAttempt?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
