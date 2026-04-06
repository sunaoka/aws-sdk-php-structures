<?php

namespace Sunaoka\Aws\Structures\Omics\GetRunTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $taskId
 * @property 'PENDING'|'STARTING'|'RUNNING'|'STOPPING'|'COMPLETED'|'CANCELLED'|'FAILED'|null $status
 * @property string|null $name
 * @property int<1, max>|null $cpus
 * @property int<1, max>|null $memory
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $stopTime
 * @property string|null $statusMessage
 * @property string|null $logStream
 * @property int<0, max>|null $gpus
 * @property string|null $instanceType
 */
class GetRunTaskResponse extends Response
{
}
