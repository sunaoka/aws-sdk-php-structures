<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\UpdateAgentInsight;

trait UpdateAgentInsightTrait
{
    /**
     * @param UpdateAgentInsightRequest $args
     * @return UpdateAgentInsightResponse
     */
    public function updateAgentInsight(UpdateAgentInsightRequest $args)
    {
        $result = parent::updateAgentInsight($args->toArray());
        return new UpdateAgentInsightResponse($result->toArray());
    }
}
