<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\CreateBotReplica;

trait CreateBotReplicaTrait
{
    /**
     * @param CreateBotReplicaRequest $args
     * @return CreateBotReplicaResponse
     */
    public function createBotReplica(CreateBotReplicaRequest $args)
    {
        $result = parent::createBotReplica($args->toArray());
        return new CreateBotReplicaResponse($result->toArray());
    }
}
