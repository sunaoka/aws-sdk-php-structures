<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeQueries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CWLI'|'SQL'|'PPL' $queryLanguage
 * @property string $queryId
 * @property string $queryString
 * @property 'Scheduled'|'Running'|'Complete'|'Failed'|'Cancelled'|'Timeout'|'Unknown' $status
 * @property int<0, max> $createTime
 * @property string $logGroupName
 */
class QueryInfo extends Shape
{
    /**
     * @param array{
     *     queryLanguage?: 'CWLI'|'SQL'|'PPL',
     *     queryId?: string,
     *     queryString?: string,
     *     status?: 'Scheduled'|'Running'|'Complete'|'Failed'|'Cancelled'|'Timeout'|'Unknown',
     *     createTime?: int<0, max>,
     *     logGroupName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
