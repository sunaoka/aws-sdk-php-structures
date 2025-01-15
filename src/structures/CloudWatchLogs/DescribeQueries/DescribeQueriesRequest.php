<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeQueries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $logGroupName
 * @property 'Scheduled'|'Running'|'Complete'|'Failed'|'Cancelled'|'Timeout'|'Unknown'|null $status
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 * @property 'CWLI'|'SQL'|'PPL'|null $queryLanguage
 */
class DescribeQueriesRequest extends Request
{
    /**
     * @param array{
     *     logGroupName?: string|null,
     *     status?: 'Scheduled'|'Running'|'Complete'|'Failed'|'Cancelled'|'Timeout'|'Unknown'|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null,
     *     queryLanguage?: 'CWLI'|'SQL'|'PPL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
