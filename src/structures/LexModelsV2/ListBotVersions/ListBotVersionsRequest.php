<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBotVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property Shapes\BotVersionSortBy $sortBy
 * @property int<1, 1000> $maxResults
 * @property string $nextToken
 */
class ListBotVersionsRequest extends Request
{
    /**
     * @param array{
     *     botId: string,
     *     sortBy?: Shapes\BotVersionSortBy,
     *     maxResults?: int<1, 1000>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
