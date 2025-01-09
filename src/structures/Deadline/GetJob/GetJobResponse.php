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
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $updatedBy
 * @property \Aws\Api\DateTimeResult $startedAt
 * @property \Aws\Api\DateTimeResult $endedAt
 * @property 'PENDING'|'READY'|'ASSIGNED'|'STARTING'|'SCHEDULED'|'INTERRUPTING'|'RUNNING'|'SUSPENDED'|'CANCELED'|'FAILED'|'SUCCEEDED'|'NOT_COMPATIBLE' $taskRunStatus
 * @property 'READY'|'FAILED'|'SUCCEEDED'|'CANCELED'|'SUSPENDED'|'PENDING' $targetTaskRunStatus
 * @property array<'PENDING'|'READY'|'ASSIGNED'|'STARTING'|'SCHEDULED'|'INTERRUPTING'|'RUNNING'|'SUSPENDED'|'CANCELED'|'FAILED'|'SUCCEEDED'|'NOT_COMPATIBLE', int> $taskRunStatusCounts
 * @property string $storageProfileId
 * @property int<0, 2147483647> $maxFailedTasksCount
 * @property int<0, 2147483647> $maxRetriesPerTask
 * @property array<string, Shapes\JobParameter> $parameters
 * @property Shapes\Attachments $attachments
 * @property string $description
 * @property string $sourceJobId
 */
class GetJobResponse extends Response
{
}
