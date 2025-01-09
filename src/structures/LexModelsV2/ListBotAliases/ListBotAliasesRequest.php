<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBotAliases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property int $maxResults
 * @property string $nextToken
 */
class ListBotAliasesRequest extends Request
{
    /**
     * @param array{
     *     botId: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
