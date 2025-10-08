<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\DeleteBotReplica;

trait DeleteBotReplicaTrait
{
    /**
     * @param DeleteBotReplicaRequest $args
     * @return DeleteBotReplicaResponse
     */
    public function deleteBotReplica(DeleteBotReplicaRequest $args)
    {
        $result = parent::deleteBotReplica($args->toArray());
        return new DeleteBotReplicaResponse($result->toArray());
    }
}
