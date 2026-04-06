<?php

namespace Sunaoka\Aws\Structures\Braket\SearchQuantumTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $quantumTaskArn
 * @property 'CREATED'|'QUEUED'|'RUNNING'|'COMPLETED'|'FAILED'|'CANCELLING'|'CANCELLED' $status
 * @property string $deviceArn
 * @property int $shots
 * @property string $outputS3Bucket
 * @property string $outputS3Directory
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult|null $endedAt
 * @property array<string, string>|null $tags
 */
class QuantumTaskSummary extends Shape
{
    /**
     * @param array{
     *     quantumTaskArn: string,
     *     status: 'CREATED'|'QUEUED'|'RUNNING'|'COMPLETED'|'FAILED'|'CANCELLING'|'CANCELLED',
     *     deviceArn: string,
     *     shots: int,
     *     outputS3Bucket: string,
     *     outputS3Directory: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     endedAt?: \Aws\Api\DateTimeResult|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
