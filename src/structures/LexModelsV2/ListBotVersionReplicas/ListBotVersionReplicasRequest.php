<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBotVersionReplicas;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property string $replicaRegion
 * @property int<1, 1000> $maxResults
 * @property string $nextToken
 * @property Shapes\BotVersionReplicaSortBy $sortBy
 */
class ListBotVersionReplicasRequest extends Request
{
    /**
     * @param array{
     *     botId: string,
     *     replicaRegion: string,
     *     maxResults?: int<1, 1000>,
     *     nextToken?: string,
     *     sortBy?: Shapes\BotVersionReplicaSortBy
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
