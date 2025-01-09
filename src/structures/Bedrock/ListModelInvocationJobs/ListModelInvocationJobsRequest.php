<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListModelInvocationJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $submitTimeAfter
 * @property \Aws\Api\DateTimeResult $submitTimeBefore
 * @property 'Submitted'|'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped'|'PartiallyCompleted'|'Expired'|'Validating'|'Scheduled' $statusEquals
 * @property string $nameContains
 * @property int $maxResults
 * @property string $nextToken
 * @property 'CreationTime' $sortBy
 * @property 'Ascending'|'Descending' $sortOrder
 */
class ListModelInvocationJobsRequest extends Request
{
    /**
     * @param array{
     *     submitTimeAfter?: \Aws\Api\DateTimeResult,
     *     submitTimeBefore?: \Aws\Api\DateTimeResult,
     *     statusEquals?: 'Submitted'|'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped'|'PartiallyCompleted'|'Expired'|'Validating'|'Scheduled',
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
