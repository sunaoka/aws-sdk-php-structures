<?php

namespace Sunaoka\Aws\Structures\Deadline\ListTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $taskId
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property 'PENDING'|'READY'|'ASSIGNED'|'STARTING'|'SCHEDULED'|'INTERRUPTING'|'RUNNING'|'SUSPENDED'|'CANCELED'|'FAILED'|'SUCCEEDED'|'NOT_COMPATIBLE' $runStatus
 * @property 'READY'|'FAILED'|'SUCCEEDED'|'CANCELED'|'SUSPENDED'|'PENDING'|null $targetRunStatus
 * @property int<0, 2147483647>|null $failureRetryCount
 * @property array<string, TaskParameterValue>|null $parameters
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property \Aws\Api\DateTimeResult|null $endedAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 * @property string|null $latestSessionActionId
 */
class TaskSummary extends Shape
{
    /**
     * @param array{
     *     taskId: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     createdBy: string,
     *     runStatus: 'PENDING'|'READY'|'ASSIGNED'|'STARTING'|'SCHEDULED'|'INTERRUPTING'|'RUNNING'|'SUSPENDED'|'CANCELED'|'FAILED'|'SUCCEEDED'|'NOT_COMPATIBLE',
     *     targetRunStatus?: 'READY'|'FAILED'|'SUCCEEDED'|'CANCELED'|'SUSPENDED'|'PENDING'|null,
     *     failureRetryCount?: int<0, 2147483647>|null,
     *     parameters?: array<string, TaskParameterValue>|null,
     *     startedAt?: \Aws\Api\DateTimeResult|null,
     *     endedAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     updatedBy?: string|null,
     *     latestSessionActionId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
