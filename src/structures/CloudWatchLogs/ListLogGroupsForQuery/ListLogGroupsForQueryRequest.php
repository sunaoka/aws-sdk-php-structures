<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\ListLogGroupsForQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $queryId
 * @property string|null $nextToken
 * @property int<50, 500>|null $maxResults
 */
class ListLogGroupsForQueryRequest extends Request
{
    /**
     * @param array{
     *     queryId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<50, 500>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
