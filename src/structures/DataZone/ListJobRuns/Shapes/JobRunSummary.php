<?php

namespace Sunaoka\Aws\Structures\DataZone\ListJobRuns\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $domainId
 * @property string|null $jobId
 * @property 'LINEAGE'|null $jobType
 * @property string|null $runId
 * @property 'SCHEDULED'|'ON_DEMAND'|null $runMode
 * @property 'SCHEDULED'|'IN_PROGRESS'|'SUCCESS'|'PARTIALLY_SUCCEEDED'|'FAILED'|'ABORTED'|'TIMED_OUT'|'CANCELED'|null $status
 * @property JobRunError|null $error
 * @property string|null $createdBy
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 */
class JobRunSummary extends Shape
{
    /**
     * @param array{
     *     domainId?: string|null,
     *     jobId?: string|null,
     *     jobType?: 'LINEAGE'|null,
     *     runId?: string|null,
     *     runMode?: 'SCHEDULED'|'ON_DEMAND'|null,
     *     status?: 'SCHEDULED'|'IN_PROGRESS'|'SUCCESS'|'PARTIALLY_SUCCEEDED'|'FAILED'|'ABORTED'|'TIMED_OUT'|'CANCELED'|null,
     *     error?: JobRunError|null,
     *     createdBy?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     endTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
