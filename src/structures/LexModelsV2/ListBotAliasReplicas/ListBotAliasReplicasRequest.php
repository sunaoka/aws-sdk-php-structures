<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBotAliasReplicas;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property string $replicaRegion
 * @property int $maxResults
 * @property string $nextToken
 */
class ListBotAliasReplicasRequest extends Request
{
    /**
     * @param array{
     *     botId: string,
     *     replicaRegion: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
