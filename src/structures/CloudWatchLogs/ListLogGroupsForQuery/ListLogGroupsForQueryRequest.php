<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\ListLogGroupsForQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $queryId
 * @property string $nextToken
 * @property int $maxResults
 */
class ListLogGroupsForQueryRequest extends Request
{
    /**
     * @param array{
     *     queryId: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
