<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetBotAliases;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botName
 * @property string $nextToken
 * @property int<1, 50> $maxResults
 * @property string $nameContains
 */
class GetBotAliasesRequest extends Request
{
    /**
     * @param array{
     *     botName: string,
     *     nextToken?: string,
     *     maxResults?: int<1, 50>,
     *     nameContains?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
