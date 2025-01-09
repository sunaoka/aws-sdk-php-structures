<?php

namespace Sunaoka\Aws\Structures\DataZone\ListJobRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $createdBy
 * @property string $domainId
 * @property \Aws\Api\DateTimeResult $endTime
 * @property JobRunError $error
 * @property string $jobId
 * @property 'LINEAGE' $jobType
 * @property string $runId
 * @property 'SCHEDULED'|'ON_DEMAND' $runMode
 * @property \Aws\Api\DateTimeResult $startTime
 * @property 'SCHEDULED'|'IN_PROGRESS'|'SUCCESS'|'PARTIALLY_SUCCEEDED'|'FAILED'|'ABORTED'|'TIMED_OUT'|'CANCELED' $status
 */
class JobRunSummary extends Shape
{
    /**
     * @param array{
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     createdBy?: string,
     *     domainId?: string,
     *     endTime?: \Aws\Api\DateTimeResult,
     *     error?: JobRunError,
     *     jobId?: string,
     *     jobType?: 'LINEAGE',
     *     runId?: string,
     *     runMode?: 'SCHEDULED'|'ON_DEMAND',
     *     startTime?: \Aws\Api\DateTimeResult,
     *     status?: 'SCHEDULED'|'IN_PROGRESS'|'SUCCESS'|'PARTIALLY_SUCCEEDED'|'FAILED'|'ABORTED'|'TIMED_OUT'|'CANCELED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
