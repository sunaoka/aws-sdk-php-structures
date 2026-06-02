<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'AgentRFT'|'AgentRFTEvaluation' $JobCategory
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property \Aws\Api\DateTimeResult|null $CreationTimeAfter
 * @property \Aws\Api\DateTimeResult|null $CreationTimeBefore
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTimeAfter
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTimeBefore
 * @property string|null $NameContains
 * @property 'Name'|'CreationTime'|'Status'|null $SortBy
 * @property 'Ascending'|'Descending'|null $SortOrder
 * @property 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped'|'Deleting'|'DeleteFailed'|null $StatusEquals
 */
class ListJobsRequest extends Request
{
    /**
     * @param array{
     *     JobCategory: 'AgentRFT'|'AgentRFTEvaluation',
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult|null,
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTimeAfter?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTimeBefore?: \Aws\Api\DateTimeResult|null,
     *     NameContains?: string|null,
     *     SortBy?: 'Name'|'CreationTime'|'Status'|null,
     *     SortOrder?: 'Ascending'|'Descending'|null,
     *     StatusEquals?: 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped'|'Deleting'|'DeleteFailed'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
