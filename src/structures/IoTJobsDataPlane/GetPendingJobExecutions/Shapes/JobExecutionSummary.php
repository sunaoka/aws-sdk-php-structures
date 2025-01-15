<?php

namespace Sunaoka\Aws\Structures\IoTJobsDataPlane\GetPendingJobExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $jobId
 * @property int|null $queuedAt
 * @property int|null $startedAt
 * @property int|null $lastUpdatedAt
 * @property int|null $versionNumber
 * @property int|null $executionNumber
 */
class JobExecutionSummary extends Shape
{
    /**
     * @param array{
     *     jobId?: string|null,
     *     queuedAt?: int|null,
     *     startedAt?: int|null,
     *     lastUpdatedAt?: int|null,
     *     versionNumber?: int|null,
     *     executionNumber?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
