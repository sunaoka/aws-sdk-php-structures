<?php

namespace Sunaoka\Aws\Structures\IoTJobsDataPlane\GetPendingJobExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobId
 * @property int $queuedAt
 * @property int $startedAt
 * @property int $lastUpdatedAt
 * @property int $versionNumber
 * @property int $executionNumber
 */
class JobExecutionSummary extends Shape
{
    /**
     * @param array{
     *     jobId?: string,
     *     queuedAt?: int,
     *     startedAt?: int,
     *     lastUpdatedAt?: int,
     *     versionNumber?: int,
     *     executionNumber?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
