<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListModelCustomizationJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $creationTimeAfter
 * @property \Aws\Api\DateTimeResult $creationTimeBefore
 * @property 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped' $statusEquals
 * @property string $nameContains
 * @property int $maxResults
 * @property string $nextToken
 * @property 'CreationTime' $sortBy
 * @property 'Ascending'|'Descending' $sortOrder
 */
class ListModelCustomizationJobsRequest extends Request
{
    /**
     * @param array{
     *     creationTimeAfter?: \Aws\Api\DateTimeResult,
     *     creationTimeBefore?: \Aws\Api\DateTimeResult,
     *     statusEquals?: 'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped',
     *     nameContains?: string,
     *     maxResults?: int,
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
