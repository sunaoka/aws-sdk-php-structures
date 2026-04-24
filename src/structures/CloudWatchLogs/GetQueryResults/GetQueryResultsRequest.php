<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetQueryResults;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $queryId
 * @property string|null $nextToken
 * @property int<0, 10000>|null $maxItems
 */
class GetQueryResultsRequest extends Request
{
    /**
     * @param array{
     *     queryId: string,
     *     nextToken?: string|null,
     *     maxItems?: int<0, 10000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
