<?php

namespace Sunaoka\Aws\Structures\Deadline\GetJob;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $jobId
 * @property string $name
 * @property 'CREATE_IN_PROGRESS'|'CREATE_FAILED'|'CREATE_COMPLETE'|'UPLOAD_IN_PROGRESS'|'UPLOAD_FAILED'|'UPDATE_IN_PROGRESS'|'UPDATE_FAILED'|'UPDATE_SUCCEEDED'|'ARCHIVED' $lifecycleStatus
 * @property string $lifecycleStatusMessage
 * @property int<0, 100> $priority
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property \Aws\Api\DateTimeResult|null $endedAt
 * @property 'PENDING'|'READY'|'ASSIGNED'|'STARTING'|'SCHEDULED'|'INTERRUPTING'|'RUNNING'|'SUSPENDED'|'CANCELED'|'FAILED'|'SUCCEEDED'|'NOT_COMPATIBLE'|null $taskRunStatus
 * @property 'READY'|'FAILED'|'SUCCEEDED'|'CANCELED'|'SUSPENDED'|'PENDING'|null $targetTaskRunStatus
 * @property array<'PENDING'|'READY'|'ASSIGNED'|'STARTING'|'SCHEDULED'|'INTERRUPTING'|'RUNNING'|'SUSPENDED'|'CANCELED'|'FAILED'|'SUCCEEDED'|'NOT_COMPATIBLE', int>|null $taskRunStatusCounts
 * @property int<0, 2147483647>|null $taskFailureRetryCount
 * @property string|null $storageProfileId
 * @property int<0, 2147483647>|null $maxFailedTasksCount
 * @property int<0, 2147483647>|null $maxRetriesPerTask
 * @property array<string, Shapes\JobParameter>|null $parameters
 * @property Shapes\Attachments|null $attachments
 * @property string|null $description
 * @property int<-1, 2147483647>|null $maxWorkerCount
 * @property string|null $sourceJobId
 */
class GetJobResponse extends Response
{
}
