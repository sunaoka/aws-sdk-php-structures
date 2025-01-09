<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBots;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\BotSortBy $sortBy
 * @property list<Shapes\BotFilter> $filters
 * @property int<1, 1000> $maxResults
 * @property string $nextToken
 */
class ListBotsRequest extends Request
{
    /**
     * @param array{
     *     sortBy?: Shapes\BotSortBy,
     *     filters?: list<Shapes\BotFilter>,
     *     maxResults?: int<1, 1000>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
