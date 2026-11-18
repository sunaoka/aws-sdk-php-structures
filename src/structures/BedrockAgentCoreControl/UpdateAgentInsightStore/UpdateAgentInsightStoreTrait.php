<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateAgentInsightStore;

trait UpdateAgentInsightStoreTrait
{
    /**
     * @param UpdateAgentInsightStoreRequest $args
     * @return UpdateAgentInsightStoreResponse
     */
    public function updateAgentInsightStore(UpdateAgentInsightStoreRequest $args)
    {
        $result = parent::updateAgentInsightStore($args->toArray());
        return new UpdateAgentInsightStoreResponse($result->toArray());
    }
}
