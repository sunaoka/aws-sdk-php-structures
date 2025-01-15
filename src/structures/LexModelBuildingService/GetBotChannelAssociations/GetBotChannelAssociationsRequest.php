<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetBotChannelAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botName
 * @property string $botAlias
 * @property string|null $nextToken
 * @property int<1, 50>|null $maxResults
 * @property string|null $nameContains
 */
class GetBotChannelAssociationsRequest extends Request
{
    /**
     * @param array{
     *     botName: string,
     *     botAlias: string,
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
