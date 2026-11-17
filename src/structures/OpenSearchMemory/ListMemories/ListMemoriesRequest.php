<?php

namespace Sunaoka\Aws\Structures\OpenSearchMemory\ListMemories;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceId
 * @property list<Shapes\StrategySelector>|null $memoryStrategies
 * @property list<string>|null $actorIds
 * @property list<string>|null $sessionIds
 * @property 'CREATED_AT'|'UPDATED_AT'|null $sortBy
 * @property 'ASC'|'DESC'|null $sortOrder
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListMemoriesRequest extends Request
{
    /**
     * @param array{
     *     spaceId: string,
     *     memoryStrategies?: list<Shapes\StrategySelector>|null,
     *     actorIds?: list<string>|null,
     *     sessionIds?: list<string>|null,
     *     sortBy?: 'CREATED_AT'|'UPDATED_AT'|null,
     *     sortOrder?: 'ASC'|'DESC'|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
