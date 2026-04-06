<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBotAliasReplicas;

trait ListBotAliasReplicasTrait
{
    /**
     * @param ListBotAliasReplicasRequest $args
     * @return ListBotAliasReplicasResponse
     */
    public function listBotAliasReplicas(ListBotAliasReplicasRequest $args)
    {
        $result = parent::listBotAliasReplicas($args->toArray());
        return new ListBotAliasReplicasResponse($result->toArray());
    }
}
