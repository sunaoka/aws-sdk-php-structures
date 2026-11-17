<?php

namespace Sunaoka\Aws\Structures\OpenSearchMemory\SearchMemories;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceId
 * @property list<Shapes\StrategySelector>|null $memoryStrategies
 * @property string $actorId
 * @property Shapes\SearchQuery $query
 * @property Shapes\SearchSort|null $sort
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class SearchMemoriesRequest extends Request
{
    /**
     * @param array{
     *     spaceId: string,
     *     memoryStrategies?: list<Shapes\StrategySelector>|null,
     *     actorId: string,
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
