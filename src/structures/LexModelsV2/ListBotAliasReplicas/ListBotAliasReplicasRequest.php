<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBotAliasReplicas;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property string $replicaRegion
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListBotAliasReplicasRequest extends Request
{
    /**
     * @param array{
     *     botId: string,
     *     replicaRegion: string,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
