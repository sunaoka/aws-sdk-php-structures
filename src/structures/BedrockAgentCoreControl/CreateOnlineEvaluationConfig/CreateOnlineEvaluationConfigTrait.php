<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateOnlineEvaluationConfig;

trait CreateOnlineEvaluationConfigTrait
{
    /**
     * @param CreateOnlineEvaluationConfigRequest $args
     * @return CreateOnlineEvaluationConfigResponse
     */
    public function createOnlineEvaluationConfig(CreateOnlineEvaluationConfigRequest $args)
    {
        $result = parent::createOnlineEvaluationConfig($args->toArray());
        return new CreateOnlineEvaluationConfigResponse($result->toArray());
    }
}
