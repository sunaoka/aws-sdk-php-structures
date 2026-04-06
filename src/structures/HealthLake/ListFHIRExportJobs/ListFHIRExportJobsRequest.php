<?php

namespace Sunaoka\Aws\Structures\HealthLake\ListFHIRExportJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DatastoreId
 * @property string|null $NextToken
 * @property int<1, 500>|null $MaxResults
 * @property string|null $JobName
 * @property 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED_WITH_ERRORS'|'COMPLETED'|'FAILED'|'CANCEL_SUBMITTED'|'CANCEL_IN_PROGRESS'|'CANCEL_COMPLETED'|'CANCEL_FAILED'|null $JobStatus
 * @property \Aws\Api\DateTimeResult|null $SubmittedBefore
 * @property \Aws\Api\DateTimeResult|null $SubmittedAfter
 */
class ListFHIRExportJobsRequest extends Request
{
    /**
     * @param array{
     *     DatastoreId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 500>|null,
     *     JobName?: string|null,
     *     JobStatus?: 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED_WITH_ERRORS'|'COMPLETED'|'FAILED'|'CANCEL_SUBMITTED'|'CANCEL_IN_PROGRESS'|'CANCEL_COMPLETED'|'CANCEL_FAILED'|null,
     *     SubmittedBefore?: \Aws\Api\DateTimeResult|null,
     *     SubmittedAfter?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
