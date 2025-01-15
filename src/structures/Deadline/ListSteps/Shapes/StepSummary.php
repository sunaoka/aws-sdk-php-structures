<?php

namespace Sunaoka\Aws\Structures\Deadline\ListSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $stepId
 * @property string $name
 * @property 'CREATE_COMPLETE'|'UPDATE_IN_PROGRESS'|'UPDATE_FAILED'|'UPDATE_SUCCEEDED' $lifecycleStatus
 * @property string|null $lifecycleStatusMessage
 * @property 'PENDING'|'READY'|'ASSIGNED'|'STARTING'|'SCHEDULED'|'INTERRUPTING'|'RUNNING'|'SUSPENDED'|'CANCELED'|'FAILED'|'SUCCEEDED'|'NOT_COMPATIBLE' $taskRunStatus
 * @property array<'PENDING'|'READY'|'ASSIGNED'|'STARTING'|'SCHEDULED'|'INTERRUPTING'|'RUNNING'|'SUSPENDED'|'CANCELED'|'FAILED'|'SUCCEEDED'|'NOT_COMPATIBLE', int> $taskRunStatusCounts
 * @property 'READY'|'FAILED'|'SUCCEEDED'|'CANCELED'|'SUSPENDED'|'PENDING'|null $targetTaskRunStatus
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property \Aws\Api\DateTimeResult|null $endedAt
 * @property DependencyCounts|null $dependencyCounts
 */
class StepSummary extends Shape
{
    /**
     * @param array{
     *     stepId: string,
     *     name: string,
     *     lifecycleStatus: 'CREATE_COMPLETE'|'UPDATE_IN_PROGRESS'|'UPDATE_FAILED'|'UPDATE_SUCCEEDED',
     *     lifecycleStatusMessage?: string|null,
     *     taskRunStatus: 'PENDING'|'READY'|'ASSIGNED'|'STARTING'|'SCHEDULED'|'INTERRUPTING'|'RUNNING'|'SUSPENDED'|'CANCELED'|'FAILED'|'SUCCEEDED'|'NOT_COMPATIBLE',
     *     taskRunStatusCounts: array<'PENDING'|'READY'|'ASSIGNED'|'STARTING'|'SCHEDULED'|'INTERRUPTING'|'RUNNING'|'SUSPENDED'|'CANCELED'|'FAILED'|'SUCCEEDED'|'NOT_COMPATIBLE', int>,
     *     targetTaskRunStatus?: 'READY'|'FAILED'|'SUCCEEDED'|'CANCELED'|'SUSPENDED'|'PENDING'|null,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     createdBy: string,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     updatedBy?: string|null,
     *     startedAt?: \Aws\Api\DateTimeResult|null,
     *     endedAt?: \Aws\Api\DateTimeResult|null,
     *     dependencyCounts?: DependencyCounts|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
