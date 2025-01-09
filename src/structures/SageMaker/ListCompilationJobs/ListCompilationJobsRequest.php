<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListCompilationJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 * @property \Aws\Api\DateTimeResult $CreationTimeAfter
 * @property \Aws\Api\DateTimeResult $CreationTimeBefore
 * @property \Aws\Api\DateTimeResult $LastModifiedTimeAfter
 * @property \Aws\Api\DateTimeResult $LastModifiedTimeBefore
 * @property string $NameContains
 * @property 'INPROGRESS'|'COMPLETED'|'FAILED'|'STARTING'|'STOPPING'|'STOPPED' $StatusEquals
 * @property 'Name'|'CreationTime'|'Status' $SortBy
 * @property 'Ascending'|'Descending' $SortOrder
 */
class ListCompilationJobsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>,
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult,
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult,
     *     LastModifiedTimeAfter?: \Aws\Api\DateTimeResult,
     *     LastModifiedTimeBefore?: \Aws\Api\DateTimeResult,
     *     NameContains?: string,
     *     StatusEquals?: 'INPROGRESS'|'COMPLETED'|'FAILED'|'STARTING'|'STOPPING'|'STOPPED',
     *     SortBy?: 'Name'|'CreationTime'|'Status',
     *     SortOrder?: 'Ascending'|'Descending'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
