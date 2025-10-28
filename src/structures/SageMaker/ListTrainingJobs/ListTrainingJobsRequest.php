<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListTrainingJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property \Aws\Api\DateTimeResult|null $CreationTimeAfter
 * @property \Aws\Api\DateTimeResult|null $CreationTimeBefore
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTimeAfter
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTimeBefore
 * @property string|null $NameContains
 * @property 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped'|'Deleting'|null $StatusEquals
 * @property 'Name'|'CreationTime'|'Status'|null $SortBy
 * @property 'Ascending'|'Descending'|null $SortOrder
 * @property 'Available'|'Terminated'|'Reused'|'InUse'|null $WarmPoolStatusEquals
 * @property string|null $TrainingPlanArnEquals
 */
class ListTrainingJobsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult|null,
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTimeAfter?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTimeBefore?: \Aws\Api\DateTimeResult|null,
     *     NameContains?: string|null,
     *     StatusEquals?: 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped'|'Deleting'|null,
     *     SortBy?: 'Name'|'CreationTime'|'Status'|null,
     *     SortOrder?: 'Ascending'|'Descending'|null,
     *     WarmPoolStatusEquals?: 'Available'|'Terminated'|'Reused'|'InUse'|null,
     *     TrainingPlanArnEquals?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
