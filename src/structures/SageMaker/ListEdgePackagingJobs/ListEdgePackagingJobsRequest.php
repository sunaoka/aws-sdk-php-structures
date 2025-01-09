<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListEdgePackagingJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int<min, 100> $MaxResults
 * @property \Aws\Api\DateTimeResult $CreationTimeAfter
 * @property \Aws\Api\DateTimeResult $CreationTimeBefore
 * @property \Aws\Api\DateTimeResult $LastModifiedTimeAfter
 * @property \Aws\Api\DateTimeResult $LastModifiedTimeBefore
 * @property string $NameContains
 * @property string $ModelNameContains
 * @property 'STARTING'|'INPROGRESS'|'COMPLETED'|'FAILED'|'STOPPING'|'STOPPED' $StatusEquals
 * @property 'NAME'|'MODEL_NAME'|'CREATION_TIME'|'LAST_MODIFIED_TIME'|'STATUS' $SortBy
 * @property 'Ascending'|'Descending' $SortOrder
 */
class ListEdgePackagingJobsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int<min, 100>,
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult,
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult,
     *     LastModifiedTimeAfter?: \Aws\Api\DateTimeResult,
     *     LastModifiedTimeBefore?: \Aws\Api\DateTimeResult,
     *     NameContains?: string,
     *     ModelNameContains?: string,
     *     StatusEquals?: 'STARTING'|'INPROGRESS'|'COMPLETED'|'FAILED'|'STOPPING'|'STOPPED',
     *     SortBy?: 'NAME'|'MODEL_NAME'|'CREATION_TIME'|'LAST_MODIFIED_TIME'|'STATUS',
     *     SortOrder?: 'Ascending'|'Descending'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
