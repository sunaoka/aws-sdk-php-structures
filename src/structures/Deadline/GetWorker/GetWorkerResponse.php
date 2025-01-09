<?php

namespace Sunaoka\Aws\Structures\Deadline\GetWorker;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $workerId
 * @property string $farmId
 * @property string $fleetId
 * @property Shapes\HostPropertiesResponse $hostProperties
 * @property 'CREATED'|'STARTED'|'STOPPING'|'STOPPED'|'NOT_RESPONDING'|'NOT_COMPATIBLE'|'RUNNING'|'IDLE' $status
 * @property Shapes\LogConfiguration $log
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string $updatedBy
 */
class GetWorkerResponse extends Response
{
}
