<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetOnlineEvaluationConfig;

trait GetOnlineEvaluationConfigTrait
{
    /**
     * @param GetOnlineEvaluationConfigRequest $args
     * @return GetOnlineEvaluationConfigResponse
     */
    public function getOnlineEvaluationConfig(GetOnlineEvaluationConfigRequest $args)
    {
        $result = parent::getOnlineEvaluationConfig($args->toArray());
        return new GetOnlineEvaluationConfigResponse($result->toArray());
    }
}
