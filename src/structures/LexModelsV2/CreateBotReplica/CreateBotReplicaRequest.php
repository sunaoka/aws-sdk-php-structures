<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateBotReplica;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $botId
 * @property string $replicaRegion
 */
class CreateBotReplicaRequest extends Request
{
    /**
     * @param array{
     *     botId: string,
     *     replicaRegion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
