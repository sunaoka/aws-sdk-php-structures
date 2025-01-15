<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBots;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\BotSortBy|null $sortBy
 * @property list<Shapes\BotFilter>|null $filters
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListBotsRequest extends Request
{
    /**
     * @param array{
     *     sortBy?: Shapes\BotSortBy|null,
     *     filters?: list<Shapes\BotFilter>|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
