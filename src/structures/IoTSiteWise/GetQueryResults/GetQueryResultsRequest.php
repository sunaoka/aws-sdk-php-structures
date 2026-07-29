<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\GetQueryResults;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceName
 * @property string $queryId
 * @property int<1, 10000>|null $maxResults
 * @property string|null $nextToken
 */
class GetQueryResultsRequest extends Request
{
    /**
     * @param array{
     *     workspaceName: string,
     *     queryId: string,
     *     maxResults?: int<1, 10000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
