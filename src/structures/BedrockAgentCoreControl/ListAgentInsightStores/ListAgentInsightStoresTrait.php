<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListAgentInsightStores;

trait ListAgentInsightStoresTrait
{
    /**
     * @param ListAgentInsightStoresRequest $args
     * @return ListAgentInsightStoresResponse
     */
    public function listAgentInsightStores(ListAgentInsightStoresRequest $args)
    {
        $result = parent::listAgentInsightStores($args->toArray());
        return new ListAgentInsightStoresResponse($result->toArray());
    }
}
