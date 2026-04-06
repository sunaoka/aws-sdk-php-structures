<?php

namespace Sunaoka\Aws\Structures\Deadline\SearchJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $jobId
 * @property string|null $queueId
 * @property string|null $name
 * @property 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'CREATE_COMPLETE'|'UPLOAD_IN_PROGRESS'|'UPLOAD_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_FAILED'|'UPDATE_SUCCEEDED'|'ARCHIVED'|null $lifecycleStatus
 * @property string|null $lifecycleStatusMessage
 * @property 'PENDING'|'READY'|'ASSIGNED'|'STARTING'|'SCHEDULED'|'INTERRUPTING'|'RUNNING'|'SUSPENDED'|'CANCELED'|'FAILED'|'SUCCEEDED'|'NOT_COMPATIBLE'|null $taskRunStatus
 * @property 'READY'|'FAILED'|'SUCCEEDED'|'CANCELED'|'SUSPENDED'|'PENDING'|null $targetTaskRunStatus
 * @property array<'PENDING'|'READY'|'ASSIGNED'|'STARTING'|'SCHEDULED'|'INTERRUPTING'|'RUNNING'|'SUSPENDED'|'CANCELED'|'FAILED'|'SUCCEEDED'|'NOT_COMPATIBLE', int>|null $taskRunStatusCounts
 * @property int<0, 2147483647>|null $taskFailureRetryCount
 * @property int<0, 100>|null $priority
 * @property int<0, 2147483647>|null $maxFailedTasksCount
 * @property int<0, 2147483647>|null $maxRetriesPerTask
 * @property string|null $createdBy
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $endedAt
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 * @property array<string, JobParameter>|null $jobParameters
 * @property int<-1, 2147483647>|null $maxWorkerCount
 * @property string|null $sourceJobId
 */
class JobSearchSummary extends Shape
{
    /**
     * @param array{
     *     jobId?: string|null,
     *     queueId?: string|null,
     *     name?: string|null,
     *     lifecycleStatus?: 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'CREATE_COMPLETE'|'UPLOAD_IN_PROGRESS'|'UPLOAD_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_FAILED'|'UPDATE_SUCCEEDED'|'ARCHIVED'|null,
     *     lifecycleStatusMessage?: string|null,
     *     taskRunStatus?: 'PENDING'|'READY'|'ASSIGNED'|'STARTING'|'SCHEDULED'|'INTERRUPTING'|'RUNNING'|'SUSPENDED'|'CANCELED'|'FAILED'|'SUCCEEDED'|'NOT_COMPATIBLE'|null,
     *     targetTaskRunStatus?: 'READY'|'FAILED'|'SUCCEEDED'|'CANCELED'|'SUSPENDED'|'PENDING'|null,
     *     taskRunStatusCounts?: array<'PENDING'|'READY'|'ASSIGNED'|'STARTING'|'SCHEDULED'|'INTERRUPTING'|'RUNNING'|'SUSPENDED'|'CANCELED'|'FAILED'|'SUCCEEDED'|'NOT_COMPATIBLE', int>|null,
     *     taskFailureRetryCount?: int<0, 2147483647>|null,
     *     priority?: int<0, 100>|null,
     *     maxFailedTasksCount?: int<0, 2147483647>|null,
     *     maxRetriesPerTask?: int<0, 2147483647>|null,
     *     createdBy?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     endedAt?: \Aws\Api\DateTimeResult|null,
     *     startedAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     updatedBy?: string|null,
     *     jobParameters?: array<string, JobParameter>|null,
     *     maxWorkerCount?: int<-1, 2147483647>|null,
     *     sourceJobId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
