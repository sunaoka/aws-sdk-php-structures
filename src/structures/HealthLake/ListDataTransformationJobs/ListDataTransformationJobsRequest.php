<?php

namespace Sunaoka\Aws\Structures\HealthLake\ListDataTransformationJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property 'SUBMITTED'|'QUEUED'|'IN_PROGRESS'|'COMPLETED'|'COMPLETED_WITH_ERRORS'|'FAILED'|null $JobStatus
 * @property string|null $JobName
 * @property \Aws\Api\DateTimeResult|null $SubmittedAfter
 * @property \Aws\Api\DateTimeResult|null $SubmittedBefore
 */
class ListDataTransformationJobsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     JobStatus?: 'SUBMITTED'|'QUEUED'|'IN_PROGRESS'|'COMPLETED'|'COMPLETED_WITH_ERRORS'|'FAILED'|null,
     *     JobName?: string|null,
     *     SubmittedAfter?: \Aws\Api\DateTimeResult|null,
     *     SubmittedBefore?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
