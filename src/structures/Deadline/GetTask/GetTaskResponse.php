<?php

namespace Sunaoka\Aws\Structures\Deadline\GetTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $taskId
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property 'PENDING'|'READY'|'ASSIGNED'|'STARTING'|'SCHEDULED'|'INTERRUPTING'|'RUNNING'|'SUSPENDED'|'CANCELED'|'FAILED'|'SUCCEEDED'|'NOT_COMPATIBLE' $runStatus
 * @property 'READY'|'FAILED'|'SUCCEEDED'|'CANCELED'|'SUSPENDED'|'PENDING' $targetRunStatus
 * @property int<0, 2147483647> $failureRetryCount
 * @property array<string, Shapes\TaskParameterValue> $parameters
 * @property \Aws\Api\DateTimeResult $startedAt
 * @property \Aws\Api\DateTimeResult $endedAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $updatedBy
 * @property string $latestSessionActionId
 */
class GetTaskResponse extends Response
{
}
