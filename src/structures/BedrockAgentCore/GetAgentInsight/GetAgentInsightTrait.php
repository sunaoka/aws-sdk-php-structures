<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetAgentInsight;

trait GetAgentInsightTrait
{
    /**
     * @param GetAgentInsightRequest $args
     * @return GetAgentInsightResponse
     */
    public function getAgentInsight(GetAgentInsightRequest $args)
    {
        $result = parent::getAgentInsight($args->toArray());
        return new GetAgentInsightResponse($result->toArray());
    }
}
