<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListInferenceRecommendationsJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult|null $CreationTimeAfter
 * @property \Aws\Api\DateTimeResult|null $CreationTimeBefore
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTimeAfter
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTimeBefore
 * @property string|null $NameContains
 * @property 'PENDING'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'STOPPING'|'STOPPED'|'DELETING'|'DELETED'|null $StatusEquals
 * @property 'Name'|'CreationTime'|'Status'|null $SortBy
 * @property 'Ascending'|'Descending'|null $SortOrder
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property string|null $ModelNameEquals
 * @property string|null $ModelPackageVersionArnEquals
 */
class ListInferenceRecommendationsJobsRequest extends Request
{
    /**
     * @param array{
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult|null,
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTimeAfter?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTimeBefore?: \Aws\Api\DateTimeResult|null,
     *     NameContains?: string|null,
     *     StatusEquals?: 'PENDING'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'STOPPING'|'STOPPED'|'DELETING'|'DELETED'|null,
     *     SortBy?: 'Name'|'CreationTime'|'Status'|null,
     *     SortOrder?: 'Ascending'|'Descending'|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     ModelNameEquals?: string|null,
     *     ModelPackageVersionArnEquals?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
