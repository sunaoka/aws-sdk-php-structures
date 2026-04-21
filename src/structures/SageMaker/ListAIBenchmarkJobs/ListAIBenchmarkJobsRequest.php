<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListAIBenchmarkJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property string|null $NameContains
 * @property 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped'|null $StatusEquals
 * @property \Aws\Api\DateTimeResult|null $CreationTimeAfter
 * @property \Aws\Api\DateTimeResult|null $CreationTimeBefore
 * @property 'Name'|'CreationTime'|'Status'|null $SortBy
 * @property 'Ascending'|'Descending'|null $SortOrder
 */
class ListAIBenchmarkJobsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     NameContains?: string|null,
     *     StatusEquals?: 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped'|null,
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult|null,
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult|null,
     *     SortBy?: 'Name'|'CreationTime'|'Status'|null,
     *     SortOrder?: 'Ascending'|'Descending'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
