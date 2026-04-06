<?php

namespace Sunaoka\Aws\Structures\Deadline\SearchTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $endedAt
 * @property int<0, 2147483647>|null $failureRetryCount
 * @property string|null $jobId
 * @property array<string, TaskParameterValue>|null $parameters
 * @property string|null $queueId
 * @property 'PENDING'|'READY'|'ASSIGNED'|'STARTING'|'SCHEDULED'|'INTERRUPTING'|'RUNNING'|'SUSPENDED'|'CANCELED'|'FAILED'|'SUCCEEDED'|'NOT_COMPATIBLE'|null $runStatus
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property string|null $stepId
 * @property 'READY'|'FAILED'|'SUCCEEDED'|'CANCELED'|'SUSPENDED'|'PENDING'|null $targetRunStatus
 * @property string|null $taskId
 */
class TaskSearchSummary extends Shape
{
    /**
     * @param array{
     *     endedAt?: \Aws\Api\DateTimeResult|null,
     *     failureRetryCount?: int<0, 2147483647>|null,
     *     jobId?: string|null,
     *     parameters?: array<string, TaskParameterValue>|null,
     *     queueId?: string|null,
     *     runStatus?: 'PENDING'|'READY'|'ASSIGNED'|'STARTING'|'SCHEDULED'|'INTERRUPTING'|'RUNNING'|'SUSPENDED'|'CANCELED'|'FAILED'|'SUCCEEDED'|'NOT_COMPATIBLE'|null,
     *     startedAt?: \Aws\Api\DateTimeResult|null,
     *     stepId?: string|null,
     *     targetRunStatus?: 'READY'|'FAILED'|'SUCCEEDED'|'CANCELED'|'SUSPENDED'|'PENDING'|null,
     *     taskId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
