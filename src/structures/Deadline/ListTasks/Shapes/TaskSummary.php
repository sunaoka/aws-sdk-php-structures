<?php

namespace Sunaoka\Aws\Structures\Deadline\ListTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult|null $endedAt
 * @property int<0, 2147483647>|null $failureRetryCount
 * @property string|null $latestSessionActionId
 * @property array<string, TaskParameterValue>|null $parameters
 * @property 'PENDING'|'READY'|'ASSIGNED'|'STARTING'|'SCHEDULED'|'INTERRUPTING'|'RUNNING'|'SUSPENDED'|'CANCELED'|'FAILED'|'SUCCEEDED'|'NOT_COMPATIBLE' $runStatus
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property 'READY'|'FAILED'|'SUCCEEDED'|'CANCELED'|'SUSPENDED'|'PENDING'|null $targetRunStatus
 * @property string $taskId
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 */
class TaskSummary extends Shape
{
    /**
     * @param array{
     *     createdAt: \Aws\Api\DateTimeResult,
     *     createdBy: string,
     *     endedAt?: \Aws\Api\DateTimeResult|null,
     *     failureRetryCount?: int<0, 2147483647>|null,
     *     latestSessionActionId?: string|null,
     *     parameters?: array<string, TaskParameterValue>|null,
     *     runStatus: 'PENDING'|'READY'|'ASSIGNED'|'STARTING'|'SCHEDULED'|'INTERRUPTING'|'RUNNING'|'SUSPENDED'|'CANCELED'|'FAILED'|'SUCCEEDED'|'NOT_COMPATIBLE',
     *     startedAt?: \Aws\Api\DateTimeResult|null,
     *     targetRunStatus?: 'READY'|'FAILED'|'SUCCEEDED'|'CANCELED'|'SUSPENDED'|'PENDING'|null,
     *     taskId: string,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     updatedBy?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
