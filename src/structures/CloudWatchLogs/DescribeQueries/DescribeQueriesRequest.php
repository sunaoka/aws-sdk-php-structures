<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeQueries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $logGroupName
 * @property 'Scheduled'|'Running'|'Complete'|'Failed'|'Cancelled'|'Timeout'|'Unknown' $status
 * @property int<1, 1000> $maxResults
 * @property string $nextToken
 * @property 'CWLI'|'SQL'|'PPL' $queryLanguage
 */
class DescribeQueriesRequest extends Request
{
    /**
     * @param array{
     *     logGroupName?: string,
     *     status?: 'Scheduled'|'Running'|'Complete'|'Failed'|'Cancelled'|'Timeout'|'Unknown',
     *     maxResults?: int<1, 1000>,
     *     nextToken?: string,
     *     queryLanguage?: 'CWLI'|'SQL'|'PPL'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
