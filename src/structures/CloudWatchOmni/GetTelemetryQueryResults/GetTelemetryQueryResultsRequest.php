<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\GetTelemetryQueryResults;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $queryId
 * @property string|null $nextToken
 * @property int<1, 1000>|null $maxResults
 */
class GetTelemetryQueryResultsRequest extends Request
{
    /**
     * @param array{
     *     queryId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
