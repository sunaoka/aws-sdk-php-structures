<?php

namespace Sunaoka\Aws\Structures\Deadline\GetWorker;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property string $farmId
 * @property string $fleetId
 * @property Shapes\HostPropertiesResponse|null $hostProperties
 * @property Shapes\LogConfiguration|null $log
 * @property 'CREATED'|'STARTED'|'STOPPING'|'STOPPED'|'NOT_RESPONDING'|'NOT_COMPATIBLE'|'RUNNING'|'IDLE' $status
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property string|null $updatedBy
 * @property string $workerId
 */
class GetWorkerResponse extends Response
{
}
