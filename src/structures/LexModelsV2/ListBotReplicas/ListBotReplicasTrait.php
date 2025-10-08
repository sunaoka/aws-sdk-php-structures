<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBotReplicas;

trait ListBotReplicasTrait
{
    /**
     * @param ListBotReplicasRequest $args
     * @return ListBotReplicasResponse
     */
    public function listBotReplicas(ListBotReplicasRequest $args)
    {
        $result = parent::listBotReplicas($args->toArray());
        return new ListBotReplicasResponse($result->toArray());
    }
}
