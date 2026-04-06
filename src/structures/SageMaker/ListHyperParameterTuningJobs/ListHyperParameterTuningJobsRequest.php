<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListHyperParameterTuningJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property 'Name'|'Status'|'CreationTime'|null $SortBy
 * @property 'Ascending'|'Descending'|null $SortOrder
 * @property string|null $NameContains
 * @property \Aws\Api\DateTimeResult|null $CreationTimeAfter
 * @property \Aws\Api\DateTimeResult|null $CreationTimeBefore
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTimeAfter
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTimeBefore
 * @property 'Completed'|'InProgress'|'Failed'|'Stopped'|'Stopping'|'Deleting'|'DeleteFailed'|null $StatusEquals
 */
class ListHyperParameterTuningJobsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     SortBy?: 'Name'|'Status'|'CreationTime'|null,
     *     SortOrder?: 'Ascending'|'Descending'|null,
     *     NameContains?: string|null,
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult|null,
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTimeAfter?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTimeBefore?: \Aws\Api\DateTimeResult|null,
     *     StatusEquals?: 'Completed'|'InProgress'|'Failed'|'Stopped'|'Stopping'|'Deleting'|'DeleteFailed'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
