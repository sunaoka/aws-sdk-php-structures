<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListOnlineEvaluationConfigs;

trait ListOnlineEvaluationConfigsTrait
{
    /**
     * @param ListOnlineEvaluationConfigsRequest $args
     * @return ListOnlineEvaluationConfigsResponse
     */
    public function listOnlineEvaluationConfigs(ListOnlineEvaluationConfigsRequest $args)
    {
        $result = parent::listOnlineEvaluationConfigs($args->toArray());
        return new ListOnlineEvaluationConfigsResponse($result->toArray());
    }
}
