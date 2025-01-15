<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListAutoMLJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult|null $CreationTimeAfter
 * @property \Aws\Api\DateTimeResult|null $CreationTimeBefore
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTimeAfter
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTimeBefore
 * @property string|null $NameContains
 * @property 'Completed'|'InProgress'|'Failed'|'Stopped'|'Stopping'|null $StatusEquals
 * @property 'Ascending'|'Descending'|null $SortOrder
 * @property 'Name'|'CreationTime'|'Status'|null $SortBy
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListAutoMLJobsRequest extends Request
{
    /**
     * @param array{
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult|null,
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTimeAfter?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTimeBefore?: \Aws\Api\DateTimeResult|null,
     *     NameContains?: string|null,
     *     StatusEquals?: 'Completed'|'InProgress'|'Failed'|'Stopped'|'Stopping'|null,
     *     SortOrder?: 'Ascending'|'Descending'|null,
     *     SortBy?: 'Name'|'CreationTime'|'Status'|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
