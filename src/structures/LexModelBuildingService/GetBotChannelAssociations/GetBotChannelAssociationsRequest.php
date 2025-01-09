<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetBotChannelAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botName
 * @property string $botAlias
 * @property string $nextToken
 * @property int<1, 50> $maxResults
 * @property string $nameContains
 */
class GetBotChannelAssociationsRequest extends Request
{
    /**
     * @param array{
     *     botName: string,
     *     botAlias: string,
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
