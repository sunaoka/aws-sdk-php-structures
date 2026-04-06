<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBotVersionReplicas;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property string $replicaRegion
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 * @property Shapes\BotVersionReplicaSortBy|null $sortBy
 */
class ListBotVersionReplicasRequest extends Request
{
    /**
     * @param array{
     *     botId: string,
     *     replicaRegion: string,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null,
     *     sortBy?: Shapes\BotVersionReplicaSortBy|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
