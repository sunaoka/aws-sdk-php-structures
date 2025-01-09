<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeQueries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $logGroupName
 * @property 'Scheduled'|'Running'|'Complete'|'Failed'|'Cancelled'|'Timeout'|'Unknown' $status
 * @property int $maxResults
 * @property string $nextToken
 * @property 'CWLI'|'SQL'|'PPL' $queryLanguage
 */
class DescribeQueriesRequest extends Request
{
    /**
     * @param array{
     *     logGroupName?: string,
     *     status?: 'Scheduled'|'Running'|'Complete'|'Failed'|'Cancelled'|'Timeout'|'Unknown',
     *     maxResults?: int,
     *     nextToken?: string,
     *     queryLanguage?: 'CWLI'|'SQL'|'PPL'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
