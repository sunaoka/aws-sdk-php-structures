<?php

namespace Sunaoka\Aws\Structures\Braket\GetQuantumTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\Association>|null $associations
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $deviceArn
 * @property string $deviceParameters
 * @property \Aws\Api\DateTimeResult|null $endedAt
 * @property string|null $failureReason
 * @property string|null $jobArn
 * @property string $outputS3Bucket
 * @property string $outputS3Directory
 * @property string $quantumTaskArn
 * @property Shapes\QuantumTaskQueueInfo|null $queueInfo
 * @property int $shots
 * @property 'CREATED'|'QUEUED'|'RUNNING'|'COMPLETED'|'FAILED'|'CANCELLING'|'CANCELLED' $status
 * @property array<string, string>|null $tags
 */
class GetQuantumTaskResponse extends Response
{
}
