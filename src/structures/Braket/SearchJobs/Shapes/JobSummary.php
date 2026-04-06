<?php

namespace Sunaoka\Aws\Structures\Braket\SearchJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'QUEUED'|'RUNNING'|'COMPLETED'|'FAILED'|'CANCELLING'|'CANCELLED' $status
 * @property string $jobArn
 * @property string $jobName
 * @property string $device
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property \Aws\Api\DateTimeResult|null $endedAt
 * @property array<string, string>|null $tags
 */
class JobSummary extends Shape
{
    /**
     * @param array{
     *     status: 'QUEUED'|'RUNNING'|'COMPLETED'|'FAILED'|'CANCELLING'|'CANCELLED',
     *     jobArn: string,
     *     jobName: string,
     *     device: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     startedAt?: \Aws\Api\DateTimeResult|null,
     *     endedAt?: \Aws\Api\DateTimeResult|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
