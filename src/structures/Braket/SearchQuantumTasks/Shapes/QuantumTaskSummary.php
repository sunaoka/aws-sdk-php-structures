<?php

namespace Sunaoka\Aws\Structures\Braket\SearchQuantumTasks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $deviceArn
 * @property \Aws\Api\DateTimeResult|null $endedAt
 * @property string $outputS3Bucket
 * @property string $outputS3Directory
 * @property string $quantumTaskArn
 * @property int $shots
 * @property 'CREATED'|'QUEUED'|'RUNNING'|'COMPLETED'|'FAILED'|'CANCELLING'|'CANCELLED' $status
 * @property array<string, string>|null $tags
 */
class QuantumTaskSummary extends Shape
{
    /**
     * @param array{
     *     createdAt: \Aws\Api\DateTimeResult,
     *     deviceArn: string,
     *     endedAt?: \Aws\Api\DateTimeResult|null,
     *     outputS3Bucket: string,
     *     outputS3Directory: string,
     *     quantumTaskArn: string,
     *     shots: int,
     *     status: 'CREATED'|'QUEUED'|'RUNNING'|'COMPLETED'|'FAILED'|'CANCELLING'|'CANCELLED',
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
