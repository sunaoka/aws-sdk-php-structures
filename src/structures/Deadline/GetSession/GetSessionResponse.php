<?php

namespace Sunaoka\Aws\Structures\Deadline\GetSession;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $endedAt
 * @property string $fleetId
 * @property Shapes\HostPropertiesResponse|null $hostProperties
 * @property 'STARTED'|'UPDATE_IN_PROGRESS'|'UPDATE_SUCCEEDED'|'UPDATE_FAILED'|'ENDED' $lifecycleStatus
 * @property Shapes\LogConfiguration $log
 * @property string $sessionId
 * @property \Aws\Api\DateTimeResult $startedAt
 * @property 'ENDED'|null $targetLifecycleStatus
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 * @property string $workerId
 * @property Shapes\LogConfiguration|null $workerLog
 */
class GetSessionResponse extends Response
{
}
