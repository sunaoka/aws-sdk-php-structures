<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListModelInvocationJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult|null $submitTimeAfter
 * @property \Aws\Api\DateTimeResult|null $submitTimeBefore
 * @property 'Submitted'|'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped'|'PartiallyCompleted'|'Expired'|'Validating'|'Scheduled'|null $statusEquals
 * @property string|null $nameContains
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 * @property 'CreationTime'|null $sortBy
 * @property 'Ascending'|'Descending'|null $sortOrder
 */
class ListModelInvocationJobsRequest extends Request
{
    /**
     * @param array{
     *     submitTimeAfter?: \Aws\Api\DateTimeResult|null,
     *     submitTimeBefore?: \Aws\Api\DateTimeResult|null,
     *     statusEquals?: 'Submitted'|'InProgress'|'Completed'|'Failed'|'Stopping'|'Stopped'|'PartiallyCompleted'|'Expired'|'Validating'|'Scheduled'|null,
     *     nameContains?: string|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null,
     *     sortBy?: 'CreationTime'|null,
     *     sortOrder?: 'Ascending'|'Descending'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
