<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetAgentInsightStore;

trait GetAgentInsightStoreTrait
{
    /**
     * @param GetAgentInsightStoreRequest $args
     * @return GetAgentInsightStoreResponse
     */
    public function getAgentInsightStore(GetAgentInsightStoreRequest $args)
    {
        $result = parent::getAgentInsightStore($args->toArray());
        return new GetAgentInsightStoreResponse($result->toArray());
    }
}
