<?php

namespace Sunaoka\Aws\Structures\Braket\GetQuantumTask;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $quantumTaskArn
 * @property 'CREATED'|'QUEUED'|'RUNNING'|'COMPLETED'|'FAILED'|'CANCELLING'|'CANCELLED' $status
 * @property string|null $failureReason
 * @property string $deviceArn
 * @property string $deviceParameters
 * @property int $shots
 * @property string $outputS3Bucket
 * @property string $outputS3Directory
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult|null $endedAt
 * @property array<string, string>|null $tags
 * @property string|null $jobArn
 * @property Shapes\QuantumTaskQueueInfo|null $queueInfo
 * @property list<Shapes\Association>|null $associations
 * @property int|null $numSuccessfulShots
 * @property Shapes\ActionMetadata|null $actionMetadata
 */
class GetQuantumTaskResponse extends Response
{
}
