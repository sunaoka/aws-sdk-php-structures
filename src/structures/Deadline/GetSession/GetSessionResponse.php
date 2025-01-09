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
 * @property \Aws\Api\DateTimeResult $endedAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $updatedBy
 * @property 'ENDED' $targetLifecycleStatus
 * @property Shapes\HostPropertiesResponse $hostProperties
 * @property Shapes\LogConfiguration $workerLog
 */
class GetSessionResponse extends Response
{
}
