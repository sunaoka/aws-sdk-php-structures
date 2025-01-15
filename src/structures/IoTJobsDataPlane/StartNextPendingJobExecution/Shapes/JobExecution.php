<?php

namespace Sunaoka\Aws\Structures\IoTJobsDataPlane\StartNextPendingJobExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $jobId
 * @property string|null $thingName
 * @property 'QUEUED'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'TIMED_OUT'|'REJECTED'|'REMOVED'|'CANCELED'|null $status
 * @property array<string, string>|null $statusDetails
 * @property int|null $queuedAt
 * @property int|null $startedAt
 * @property int|null $lastUpdatedAt
 * @property int|null $approximateSecondsBeforeTimedOut
 * @property int|null $versionNumber
 * @property int|null $executionNumber
 * @property string|null $jobDocument
 */
class JobExecution extends Shape
{
    /**
     * @param array{
     *     jobId?: string|null,
     *     thingName?: string|null,
     *     status?: 'QUEUED'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'TIMED_OUT'|'REJECTED'|'REMOVED'|'CANCELED'|null,
     *     statusDetails?: array<string, string>|null,
     *     queuedAt?: int|null,
     *     startedAt?: int|null,
     *     lastUpdatedAt?: int|null,
     *     approximateSecondsBeforeTimedOut?: int|null,
     *     versionNumber?: int|null,
     *     executionNumber?: int|null,
     *     jobDocument?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
