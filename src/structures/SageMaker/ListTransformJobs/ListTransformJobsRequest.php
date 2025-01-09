<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListTransformJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $CreationTimeAfter
 * @property \Aws\Api\DateTimeResult $CreationTimeBefore
 * @property \Aws\Api\DateTimeResult $LastModifiedTimeAfter
 * @property \Aws\Api\DateTimeResult $LastModifiedTimeBefore
 * @property string $NameContains
 * @property 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped' $StatusEquals
 * @property 'Name'|'CreationTime'|'Status' $SortBy
 * @property 'Ascending'|'Descending' $SortOrder
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class ListTransformJobsRequest extends Request
{
    /**
     * @param array{
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult,
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult,
     *     LastModifiedTimeAfter?: \Aws\Api\DateTimeResult,
     *     LastModifiedTimeBefore?: \Aws\Api\DateTimeResult,
     *     NameContains?: string,
     *     StatusEquals?: 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped',
     *     SortBy?: 'Name'|'CreationTime'|'Status',
     *     SortOrder?: 'Ascending'|'Descending',
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
