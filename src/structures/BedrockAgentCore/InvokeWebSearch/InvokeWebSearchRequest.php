<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeWebSearch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $webSearchId
 * @property string $searchQuery
 * @property int<1, 25>|null $maxResults
 * @property Shapes\WebSearchFilters|null $filters
 * @property Shapes\WebSearchUserLocation|null $userLocation
 */
class InvokeWebSearchRequest extends Request
{
    /**
     * @param array{
     *     webSearchId: string,
     *     searchQuery: string,
     *     maxResults?: int<1, 25>|null,
     *     filters?: Shapes\WebSearchFilters|null,
     *     userLocation?: Shapes\WebSearchUserLocation|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
