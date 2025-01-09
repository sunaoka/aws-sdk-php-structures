<?php

namespace Sunaoka\Aws\Structures\Braket\GetQuantumTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\Association> $associations
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $deviceArn
 * @property string $deviceParameters
 * @property \Aws\Api\DateTimeResult $endedAt
 * @property string $failureReason
 * @property string $jobArn
 * @property string $outputS3Bucket
 * @property string $outputS3Directory
 * @property string $quantumTaskArn
 * @property Shapes\QuantumTaskQueueInfo $queueInfo
 * @property int $shots
 * @property 'CREATED'|'QUEUED'|'RUNNING'|'COMPLETED'|'FAILED'|'CANCELLING'|'CANCELLED' $status
 * @property array<string, string> $tags
 */
class GetQuantumTaskResponse extends Response
{
}
