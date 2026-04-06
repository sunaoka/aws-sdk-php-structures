<?php

namespace Sunaoka\Aws\Structures\Deadline\GetTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult|null $endedAt
 * @property int<0, 2147483647>|null $failureRetryCount
 * @property string|null $latestSessionActionId
 * @property array<string, Shapes\TaskParameterValue>|null $parameters
 * @property 'PENDING'|'READY'|'ASSIGNED'|'STARTING'|'SCHEDULED'|'INTERRUPTING'|'RUNNING'|'SUSPENDED'|'CANCELED'|'FAILED'|'SUCCEEDED'|'NOT_COMPATIBLE' $runStatus
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property 'READY'|'FAILED'|'SUCCEEDED'|'CANCELED'|'SUSPENDED'|'PENDING'|null $targetRunStatus
 * @property string $taskId
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 */
class GetTaskResponse extends Response
{
}
