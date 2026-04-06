<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListBotVersionReplicas;

trait ListBotVersionReplicasTrait
{
    /**
     * @param ListBotVersionReplicasRequest $args
     * @return ListBotVersionReplicasResponse
     */
    public function listBotVersionReplicas(ListBotVersionReplicasRequest $args)
    {
        $result = parent::listBotVersionReplicas($args->toArray());
        return new ListBotVersionReplicasResponse($result->toArray());
    }
}
