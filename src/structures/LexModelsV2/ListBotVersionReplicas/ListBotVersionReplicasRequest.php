<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBotVersionReplicas;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property string $replicaRegion
 * @property int $maxResults
 * @property string $nextToken
 * @property Shapes\BotVersionReplicaSortBy $sortBy
 */
class ListBotVersionReplicasRequest extends Request
{
    /**
     * @param array{
     *     botId: string,
     *     replicaRegion: string,
     *     maxResults?: int,
     *     nextToken?: string,
     *     sortBy?: Shapes\BotVersionReplicaSortBy
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
