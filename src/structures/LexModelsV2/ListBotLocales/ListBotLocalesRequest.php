<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBotLocales;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property string $botVersion
 * @property Shapes\BotLocaleSortBy $sortBy
 * @property list<Shapes\BotLocaleFilter> $filters
 * @property int<1, 1000> $maxResults
 * @property string $nextToken
 */
class ListBotLocalesRequest extends Request
{
    /**
     * @param array{
     *     botId: string,
     *     botVersion: string,
     *     sortBy?: Shapes\BotLocaleSortBy,
     *     filters?: list<Shapes\BotLocaleFilter>,
     *     maxResults?: int<1, 1000>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
