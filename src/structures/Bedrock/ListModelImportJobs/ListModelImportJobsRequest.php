<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListModelImportJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $creationTimeAfter
 * @property \Aws\Api\DateTimeResult $creationTimeBefore
 * @property 'InProgress'|'Completed'|'Failed' $statusEquals
 * @property string $nameContains
 * @property int<1, 1000> $maxResults
 * @property string $nextToken
 * @property 'CreationTime' $sortBy
 * @property 'Ascending'|'Descending' $sortOrder
 */
class ListModelImportJobsRequest extends Request
{
    /**
     * @param array{
     *     creationTimeAfter?: \Aws\Api\DateTimeResult,
     *     creationTimeBefore?: \Aws\Api\DateTimeResult,
     *     statusEquals?: 'InProgress'|'Completed'|'Failed',
     *     nameContains?: string,
     *     maxResults?: int<1, 1000>,
     *     nextToken?: string,
     *     sortBy?: 'CreationTime',
     *     sortOrder?: 'Ascending'|'Descending'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
