<?php

namespace Sunaoka\Aws\Structures\Iot\GetCommandExecution;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $executionId
 * @property string $commandArn
 * @property string $targetArn
 * @property 'CREATED'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'REJECTED'|'TIMED_OUT' $status
 * @property Shapes\StatusReason $statusReason
 * @property array<string, Shapes\CommandExecutionResult> $result
 * @property array<string, Shapes\CommandParameterValue> $parameters
 * @property int $executionTimeoutSeconds
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property \Aws\Api\DateTimeResult $startedAt
 * @property \Aws\Api\DateTimeResult $completedAt
 * @property \Aws\Api\DateTimeResult $timeToLive
 */
class GetCommandExecutionResponse extends Response
{
}
