<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListAutoMLJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $CreationTimeAfter
 * @property \Aws\Api\DateTimeResult $CreationTimeBefore
 * @property \Aws\Api\DateTimeResult $LastModifiedTimeAfter
 * @property \Aws\Api\DateTimeResult $LastModifiedTimeBefore
 * @property string $NameContains
 * @property 'Completed'|'InProgress'|'Failed'|'Stopped'|'Stopping' $StatusEquals
 * @property 'Ascending'|'Descending' $SortOrder
 * @property 'Name'|'CreationTime'|'Status' $SortBy
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListAutoMLJobsRequest extends Request
{
    /**
     * @param array{
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult,
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult,
     *     LastModifiedTimeAfter?: \Aws\Api\DateTimeResult,
     *     LastModifiedTimeBefore?: \Aws\Api\DateTimeResult,
     *     NameContains?: string,
     *     StatusEquals?: 'Completed'|'InProgress'|'Failed'|'Stopped'|'Stopping',
     *     SortOrder?: 'Ascending'|'Descending',
     *     SortBy?: 'Name'|'CreationTime'|'Status',
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
