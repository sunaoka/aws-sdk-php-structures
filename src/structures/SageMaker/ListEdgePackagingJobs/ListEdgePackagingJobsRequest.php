<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListEdgePackagingJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<min, 100>|null $MaxResults
 * @property \Aws\Api\DateTimeResult|null $CreationTimeAfter
 * @property \Aws\Api\DateTimeResult|null $CreationTimeBefore
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTimeAfter
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTimeBefore
 * @property string|null $NameContains
 * @property string|null $ModelNameContains
 * @property 'STARTING'|'INPROGRESS'|'COMPLETED'|'FAILED'|'STOPPING'|'STOPPED'|null $StatusEquals
 * @property 'NAME'|'MODEL_NAME'|'CREATION_TIME'|'LAST_MODIFIED_TIME'|'STATUS'|null $SortBy
 * @property 'Ascending'|'Descending'|null $SortOrder
 */
class ListEdgePackagingJobsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<min, 100>|null,
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult|null,
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTimeAfter?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTimeBefore?: \Aws\Api\DateTimeResult|null,
     *     NameContains?: string|null,
     *     ModelNameContains?: string|null,
     *     StatusEquals?: 'STARTING'|'INPROGRESS'|'COMPLETED'|'FAILED'|'STOPPING'|'STOPPED'|null,
     *     SortBy?: 'NAME'|'MODEL_NAME'|'CREATION_TIME'|'LAST_MODIFIED_TIME'|'STATUS'|null,
     *     SortOrder?: 'Ascending'|'Descending'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
