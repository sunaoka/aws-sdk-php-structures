<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBotLocales;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property string $botVersion
 * @property Shapes\BotLocaleSortBy|null $sortBy
 * @property list<Shapes\BotLocaleFilter>|null $filters
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListBotLocalesRequest extends Request
{
    /**
     * @param array{
     *     botId: string,
     *     botVersion: string,
     *     sortBy?: Shapes\BotLocaleSortBy|null,
     *     filters?: list<Shapes\BotLocaleFilter>|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
