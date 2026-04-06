<?php

namespace Sunaoka\Aws\Structures\Deadline\GetSessionAction;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\SessionActionDefinition $definition
 * @property \Aws\Api\DateTimeResult|null $endedAt
 * @property int<-2147483648, 2147483647>|null $processExitCode
 * @property string|null $progressMessage
 * @property float|null $progressPercent
 * @property string $sessionActionId
 * @property string $sessionId
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property 'ASSIGNED'|'RUNNING'|'CANCELING'|'SUCCEEDED'|'FAILED'|'INTERRUPTED'|'CANCELED'|'NEVER_ATTEMPTED'|'SCHEDULED'|'RECLAIMING'|'RECLAIMED' $status
 * @property \Aws\Api\DateTimeResult|null $workerUpdatedAt
 */
class GetSessionActionResponse extends Response
{
}
