<?php

namespace Sunaoka\Aws\Structures\CloudTrail\ListQueries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EventDataStore
 * @property string|null $NextToken
 * @property int<1, 1000>|null $MaxResults
 * @property \Aws\Api\DateTimeResult|null $StartTime
 * @property \Aws\Api\DateTimeResult|null $EndTime
 * @property 'QUEUED'|'RUNNING'|'FINISHED'|'FAILED'|'CANCELLED'|'TIMED_OUT'|null $QueryStatus
 */
class ListQueriesRequest extends Request
{
    /**
     * @param array{
     *     EventDataStore: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 1000>|null,
     *     StartTime?: \Aws\Api\DateTimeResult|null,
     *     EndTime?: \Aws\Api\DateTimeResult|null,
     *     QueryStatus?: 'QUEUED'|'RUNNING'|'FINISHED'|'FAILED'|'CANCELLED'|'TIMED_OUT'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
