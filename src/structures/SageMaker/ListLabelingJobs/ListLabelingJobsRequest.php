<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListLabelingJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $CreationTimeAfter
 * @property \Aws\Api\DateTimeResult $CreationTimeBefore
 * @property \Aws\Api\DateTimeResult $LastModifiedTimeAfter
 * @property \Aws\Api\DateTimeResult $LastModifiedTimeBefore
 * @property int $MaxResults
 * @property string $NextToken
 * @property string $NameContains
 * @property 'Name'|'CreationTime'|'Status' $SortBy
 * @property 'Ascending'|'Descending' $SortOrder
 * @property 'Initializing'|'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped' $StatusEquals
 */
class ListLabelingJobsRequest extends Request
{
    /**
     * @param array{
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult,
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult,
     *     LastModifiedTimeAfter?: \Aws\Api\DateTimeResult,
     *     LastModifiedTimeBefore?: \Aws\Api\DateTimeResult,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     NameContains?: string,
     *     SortBy?: 'Name'|'CreationTime'|'Status',
     *     SortOrder?: 'Ascending'|'Descending',
     *     StatusEquals?: 'Initializing'|'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
