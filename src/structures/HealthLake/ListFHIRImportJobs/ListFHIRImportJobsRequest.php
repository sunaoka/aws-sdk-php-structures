<?php

namespace Sunaoka\Aws\Structures\HealthLake\ListFHIRImportJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DatastoreId
 * @property string $NextToken
 * @property int $MaxResults
 * @property string $JobName
 * @property 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED_WITH_ERRORS'|'COMPLETED'|'FAILED'|'CANCEL_SUBMITTED'|'CANCEL_IN_PROGRESS'|'CANCEL_COMPLETED'|'CANCEL_FAILED' $JobStatus
 * @property \Aws\Api\DateTimeResult $SubmittedBefore
 * @property \Aws\Api\DateTimeResult $SubmittedAfter
 */
class ListFHIRImportJobsRequest extends Request
{
    /**
     * @param array{
     *     DatastoreId: string,
     *     NextToken?: string,
     *     MaxResults?: int,
     *     JobName?: string,
     *     JobStatus?: 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED_WITH_ERRORS'|'COMPLETED'|'FAILED'|'CANCEL_SUBMITTED'|'CANCEL_IN_PROGRESS'|'CANCEL_COMPLETED'|'CANCEL_FAILED',
     *     SubmittedBefore?: \Aws\Api\DateTimeResult,
     *     SubmittedAfter?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
