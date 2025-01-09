<?php

namespace Sunaoka\Aws\Structures\IoTJobsDataPlane\StartNextPendingJobExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobId
 * @property string $thingName
 * @property 'QUEUED'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'TIMED_OUT'|'REJECTED'|'REMOVED'|'CANCELED' $status
 * @property array<string, string> $statusDetails
 * @property int $queuedAt
 * @property int $startedAt
 * @property int $lastUpdatedAt
 * @property int $approximateSecondsBeforeTimedOut
 * @property int $versionNumber
 * @property int $executionNumber
 * @property string $jobDocument
 */
class JobExecution extends Shape
{
    /**
     * @param array{
     *     jobId?: string,
     *     thingName?: string,
     *     status?: 'QUEUED'|'IN_PROGRESS'|'SUCCEEDED'|'FAILED'|'TIMED_OUT'|'REJECTED'|'REMOVED'|'CANCELED',
     *     statusDetails?: array<string, string>,
     *     queuedAt?: int,
     *     startedAt?: int,
     *     lastUpdatedAt?: int,
     *     approximateSecondsBeforeTimedOut?: int,
     *     versionNumber?: int,
     *     executionNumber?: int,
     *     jobDocument?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
