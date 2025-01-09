<?php

namespace Sunaoka\Aws\Structures\CloudTrail\ListQueries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EventDataStore
 * @property string $NextToken
 * @property int<1, 1000> $MaxResults
 * @property \Aws\Api\DateTimeResult $StartTime
 * @property \Aws\Api\DateTimeResult $EndTime
 * @property 'QUEUED'|'RUNNING'|'FINISHED'|'FAILED'|'CANCELLED'|'TIMED_OUT' $QueryStatus
 */
class ListQueriesRequest extends Request
{
    /**
     * @param array{
     *     EventDataStore: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 1000>,
     *     StartTime?: \Aws\Api\DateTimeResult,
     *     EndTime?: \Aws\Api\DateTimeResult,
     *     QueryStatus?: 'QUEUED'|'RUNNING'|'FINISHED'|'FAILED'|'CANCELLED'|'TIMED_OUT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
