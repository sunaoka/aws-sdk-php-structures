<?php

namespace Sunaoka\Aws\Structures\OpenSearchMemory\SearchEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceId
 * @property string $actorId
 * @property list<string>|null $sessionIds
 * @property Shapes\SearchQuery $query
 * @property Shapes\SearchSort|null $sort
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class SearchEventsRequest extends Request
{
    /**
     * @param array{
     *     spaceId: string,
     *     actorId: string,
     *     sessionIds?: list<string>|null,
     *     query: Shapes\SearchQuery,
     *     sort?: Shapes\SearchSort|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
