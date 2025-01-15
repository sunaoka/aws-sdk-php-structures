<?php

namespace Sunaoka\Aws\Structures\Braket\SearchJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $device
 * @property \Aws\Api\DateTimeResult|null $endedAt
 * @property string $jobArn
 * @property string $jobName
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property 'QUEUED'|'RUNNING'|'COMPLETED'|'FAILED'|'CANCELLING'|'CANCELLED' $status
 * @property array<string, string>|null $tags
 */
class JobSummary extends Shape
{
    /**
     * @param array{
     *     createdAt: \Aws\Api\DateTimeResult,
     *     device: string,
     *     endedAt?: \Aws\Api\DateTimeResult|null,
     *     jobArn: string,
     *     jobName: string,
     *     startedAt?: \Aws\Api\DateTimeResult|null,
     *     status: 'QUEUED'|'RUNNING'|'COMPLETED'|'FAILED'|'CANCELLING'|'CANCELLED',
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
