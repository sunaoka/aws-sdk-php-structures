<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBotVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property Shapes\BotVersionSortBy|null $sortBy
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListBotVersionsRequest extends Request
{
    /**
     * @param array{
     *     botId: string,
     *     sortBy?: Shapes\BotVersionSortBy|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
