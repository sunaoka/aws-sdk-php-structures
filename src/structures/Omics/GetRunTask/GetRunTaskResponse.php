<?php

namespace Sunaoka\Aws\Structures\Omics\GetRunTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $taskId
 * @property 'PENDING'|'STARTING'|'RUNNING'|'STOPPING'|'COMPLETED'|'CANCELLED'|'FAILED' $status
 * @property string $name
 * @property int<1, max> $cpus
 * @property bool $cacheHit
 * @property string $cacheS3Uri
 * @property int<1, max> $memory
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $stopTime
 * @property string $statusMessage
 * @property string $logStream
 * @property int<0, max> $gpus
 * @property string $instanceType
 * @property string $failureReason
 */
class GetRunTaskResponse extends Response
{
}
