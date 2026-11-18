<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\ListAgentInsights;

trait ListAgentInsightsTrait
{
    /**
     * @param ListAgentInsightsRequest $args
     * @return ListAgentInsightsResponse
     */
    public function listAgentInsights(ListAgentInsightsRequest $args)
    {
        $result = parent::listAgentInsights($args->toArray());
        return new ListAgentInsightsResponse($result->toArray());
    }
}
