<?php

namespace Sunaoka\Aws\Structures\Iot\GetCommandExecution;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $executionId
 * @property string|null $commandArn
 * @property string|null $targetArn
 * @property 'CREATED'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'REJECTED'|'TIMED_OUT'|null $status
 * @property Shapes\StatusReason|null $statusReason
 * @property array<string, Shapes\CommandExecutionResult>|null $result
 * @property array<string, Shapes\CommandParameterValue>|null $parameters
 * @property int<1, max>|null $executionTimeoutSeconds
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedAt
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property \Aws\Api\DateTimeResult|null $completedAt
 * @property \Aws\Api\DateTimeResult|null $timeToLive
 */
class GetCommandExecutionResponse extends Response
{
}
