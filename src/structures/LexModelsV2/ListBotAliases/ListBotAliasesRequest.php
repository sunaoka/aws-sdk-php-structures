<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBotAliases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListBotAliasesRequest extends Request
{
    /**
     * @param array{
     *     botId: string,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
