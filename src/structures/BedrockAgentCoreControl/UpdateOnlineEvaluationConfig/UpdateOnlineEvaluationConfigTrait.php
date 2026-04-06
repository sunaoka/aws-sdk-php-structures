<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateOnlineEvaluationConfig;

trait UpdateOnlineEvaluationConfigTrait
{
    /**
     * @param UpdateOnlineEvaluationConfigRequest $args
     * @return UpdateOnlineEvaluationConfigResponse
     */
    public function updateOnlineEvaluationConfig(UpdateOnlineEvaluationConfigRequest $args)
    {
        $result = parent::updateOnlineEvaluationConfig($args->toArray());
        return new UpdateOnlineEvaluationConfigResponse($result->toArray());
    }
}
