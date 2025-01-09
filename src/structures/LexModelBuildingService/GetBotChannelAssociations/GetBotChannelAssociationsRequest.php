<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetBotChannelAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botName
 * @property string $botAlias
 * @property string $nextToken
 * @property int $maxResults
 * @property string $nameContains
 */
class GetBotChannelAssociationsRequest extends Request
{
    /**
     * @param array{
     *     botName: string,
     *     botAlias: string,
     *     nextToken?: string,
     *     maxResults?: int,
     *     nameContains?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
