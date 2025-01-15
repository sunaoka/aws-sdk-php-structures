<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeQueries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CWLI'|'SQL'|'PPL'|null $queryLanguage
 * @property string|null $queryId
 * @property string|null $queryString
 * @property 'Scheduled'|'Running'|'Complete'|'Failed'|'Cancelled'|'Timeout'|'Unknown'|null $status
 * @property int<0, max>|null $createTime
 * @property string|null $logGroupName
 */
class QueryInfo extends Shape
{
    /**
     * @param array{
     *     queryLanguage?: 'CWLI'|'SQL'|'PPL'|null,
     *     queryId?: string|null,
     *     queryString?: string|null,
     *     status?: 'Scheduled'|'Running'|'Complete'|'Failed'|'Cancelled'|'Timeout'|'Unknown'|null,
     *     createTime?: int<0, max>|null,
     *     logGroupName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
