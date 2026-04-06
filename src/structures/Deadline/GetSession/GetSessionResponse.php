<?php

namespace Sunaoka\Aws\Structures\Deadline\GetSession;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $sessionId
 * @property string $fleetId
 * @property string $workerId
 * @property \Aws\Api\DateTimeResult $startedAt
 * @property Shapes\LogConfiguration $log
 * @property 'STARTED'|'UPDATE_IN_PROGRESS'|'UPDATE_SUCCEEDED'|'UPDATE_FAILED'|'ENDED' $lifecycleStatus
 * @property \Aws\Api\DateTimeResult|null $endedAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 * @property 'ENDED'|null $targetLifecycleStatus
 * @property Shapes\HostPropertiesResponse|null $hostProperties
 * @property Shapes\LogConfiguration|null $workerLog
 */
class GetSessionResponse extends Response
{
}
