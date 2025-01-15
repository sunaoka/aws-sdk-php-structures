<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetBotAliases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botName
 * @property string|null $nextToken
 * @property int<1, 50>|null $maxResults
 * @property string|null $nameContains
 */
class GetBotAliasesRequest extends Request
{
    /**
     * @param array{
     *     botName: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 50>|null,
     *     nameContains?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
