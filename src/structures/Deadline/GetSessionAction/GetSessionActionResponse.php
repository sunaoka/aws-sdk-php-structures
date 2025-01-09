<?php

namespace Sunaoka\Aws\Structures\Deadline\GetSessionAction;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $sessionActionId
 * @property 'ASSIGNED'|'RUNNING'|'CANCELING'|'SUCCEEDED'|'FAILED'|'INTERRUPTED'|'CANCELED'|'NEVER_ATTEMPTED'|'SCHEDULED'|'RECLAIMING'|'RECLAIMED' $status
 * @property \Aws\Api\DateTimeResult $startedAt
 * @property \Aws\Api\DateTimeResult $endedAt
 * @property \Aws\Api\DateTimeResult $workerUpdatedAt
 * @property float $progressPercent
 * @property string $sessionId
 * @property int $processExitCode
 * @property string $progressMessage
 * @property Shapes\SessionActionDefinition $definition
 */
class GetSessionActionResponse extends Response
{
}
