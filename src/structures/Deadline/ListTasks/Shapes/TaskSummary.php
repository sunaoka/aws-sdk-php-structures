<?php

namespace Sunaoka\Aws\Structures\Deadline\ListTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $taskId
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property 'PENDING'|'READY'|'ASSIGNED'|'STARTING'|'SCHEDULED'|'INTERRUPTING'|'RUNNING'|'SUSPENDED'|'CANCELED'|'FAILED'|'SUCCEEDED'|'NOT_COMPATIBLE' $runStatus
 * @property 'READY'|'FAILED'|'SUCCEEDED'|'CANCELED'|'SUSPENDED'|'PENDING' $targetRunStatus
 * @property int $failureRetryCount
 * @property array<string, TaskParameterValue> $parameters
 * @property \Aws\Api\DateTimeResult $startedAt
 * @property \Aws\Api\DateTimeResult $endedAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $updatedBy
 * @property string $latestSessionActionId
 */
class TaskSummary extends Shape
{
    /**
     * @param array{
     *     taskId: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     createdBy: string,
     *     runStatus: 'PENDING'|'READY'|'ASSIGNED'|'STARTING'|'SCHEDULED'|'INTERRUPTING'|'RUNNING'|'SUSPENDED'|'CANCELED'|'FAILED'|'SUCCEEDED'|'NOT_COMPATIBLE',
     *     targetRunStatus?: 'READY'|'FAILED'|'SUCCEEDED'|'CANCELED'|'SUSPENDED'|'PENDING',
     *     failureRetryCount?: int,
     *     parameters?: array<string, TaskParameterValue>,
     *     startedAt?: \Aws\Api\DateTimeResult,
     *     endedAt?: \Aws\Api\DateTimeResult,
     *     updatedAt?: \Aws\Api\DateTimeResult,
     *     updatedBy?: string,
     *     latestSessionActionId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
