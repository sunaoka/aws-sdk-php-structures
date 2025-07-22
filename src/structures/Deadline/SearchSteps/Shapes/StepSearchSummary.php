<?php

namespace Sunaoka\Aws\Structures\Deadline\SearchSteps\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $stepId
 * @property string|null $jobId
 * @property string|null $queueId
 * @property string|null $name
 * @property 'CREATE_COMPLETE'|'UPDATE_IN_PROGRESS'|'UPDATE_FAILED'|'UPDATE_SUCCEEDED'|null $lifecycleStatus
 * @property string|null $lifecycleStatusMessage
 * @property 'PENDING'|'READY'|'ASSIGNED'|'STARTING'|'SCHEDULED'|'INTERRUPTING'|'RUNNING'|'SUSPENDED'|'CANCELED'|'FAILED'|'SUCCEEDED'|'NOT_COMPATIBLE'|null $taskRunStatus
 * @property 'READY'|'FAILED'|'SUCCEEDED'|'CANCELED'|'SUSPENDED'|'PENDING'|null $targetTaskRunStatus
 * @property array<'PENDING'|'READY'|'ASSIGNED'|'STARTING'|'SCHEDULED'|'INTERRUPTING'|'RUNNING'|'SUSPENDED'|'CANCELED'|'FAILED'|'SUCCEEDED'|'NOT_COMPATIBLE', int>|null $taskRunStatusCounts
 * @property int<0, 2147483647>|null $taskFailureRetryCount
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property \Aws\Api\DateTimeResult|null $endedAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 * @property ParameterSpace|null $parameterSpace
 */
class StepSearchSummary extends Shape
{
    /**
     * @param array{
     *     stepId?: string|null,
     *     jobId?: string|null,
     *     queueId?: string|null,
     *     name?: string|null,
     *     lifecycleStatus?: 'CREATE_COMPLETE'|'UPDATE_IN_PROGRESS'|'UPDATE_FAILED'|'UPDATE_SUCCEEDED'|null,
     *     lifecycleStatusMessage?: string|null,
     *     taskRunStatus?: 'PENDING'|'READY'|'ASSIGNED'|'STARTING'|'SCHEDULED'|'INTERRUPTING'|'RUNNING'|'SUSPENDED'|'CANCELED'|'FAILED'|'SUCCEEDED'|'NOT_COMPATIBLE'|null,
     *     targetTaskRunStatus?: 'READY'|'FAILED'|'SUCCEEDED'|'CANCELED'|'SUSPENDED'|'PENDING'|null,
     *     taskRunStatusCounts?: array<'PENDING'|'READY'|'ASSIGNED'|'STARTING'|'SCHEDULED'|'INTERRUPTING'|'RUNNING'|'SUSPENDED'|'CANCELED'|'FAILED'|'SUCCEEDED'|'NOT_COMPATIBLE', int>|null,
     *     taskFailureRetryCount?: int<0, 2147483647>|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     createdBy?: string|null,
     *     startedAt?: \Aws\Api\DateTimeResult|null,
     *     endedAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     updatedBy?: string|null,
     *     parameterSpace?: ParameterSpace|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
