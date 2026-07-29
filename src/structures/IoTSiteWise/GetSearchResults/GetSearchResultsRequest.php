<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\GetSearchResults;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $searchId
 * @property string $workspaceName
 * @property int<1, 10000>|null $maxResults
 * @property string|null $nextToken
 */
class GetSearchResultsRequest extends Request
{
    /**
     * @param array{
     *     searchId: string,
     *     workspaceName: string,
     *     maxResults?: int<1, 10000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
