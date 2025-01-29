<?php

namespace Sunaoka\Aws\Structures\Deadline\GetWorker;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $farmId
 * @property string $fleetId
 * @property string $workerId
 * @property Shapes\HostPropertiesResponse|null $hostProperties
 * @property 'CREATED'|'STARTED'|'STOPPING'|'STOPPED'|'NOT_RESPONDING'|'NOT_COMPATIBLE'|'RUNNING'|'IDLE' $status
 * @property Shapes\LogConfiguration|null $log
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 */
class GetWorkerResponse extends Response
{
}
