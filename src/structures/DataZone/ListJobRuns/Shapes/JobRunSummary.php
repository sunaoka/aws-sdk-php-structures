<?php

namespace Sunaoka\Aws\Structures\DataZone\ListJobRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property string|null $domainId
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property JobRunError|null $error
 * @property string|null $jobId
 * @property 'LINEAGE'|null $jobType
 * @property string|null $runId
 * @property 'SCHEDULED'|'ON_DEMAND'|null $runMode
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property 'SCHEDULED'|'IN_PROGRESS'|'SUCCESS'|'PARTIALLY_SUCCEEDED'|'FAILED'|'ABORTED'|'TIMED_OUT'|'CANCELED'|null $status
 */
class JobRunSummary extends Shape
{
    /**
     * @param array{
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     createdBy?: string|null,
     *     domainId?: string|null,
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     error?: JobRunError|null,
     *     jobId?: string|null,
     *     jobType?: 'LINEAGE'|null,
     *     runId?: string|null,
     *     runMode?: 'SCHEDULED'|'ON_DEMAND'|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     status?: 'SCHEDULED'|'IN_PROGRESS'|'SUCCESS'|'PARTIALLY_SUCCEEDED'|'FAILED'|'ABORTED'|'TIMED_OUT'|'CANCELED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
