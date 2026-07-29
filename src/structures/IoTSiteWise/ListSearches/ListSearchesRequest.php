<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListSearches;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceName
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 * @property Shapes\ListSearchesFilters|null $listSearchesFilters
 */
class ListSearchesRequest extends Request
{
    /**
     * @param array{
     *     workspaceName: string,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null,
     *     listSearchesFilters?: Shapes\ListSearchesFilters|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
