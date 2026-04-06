<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteOnlineEvaluationConfig;

trait DeleteOnlineEvaluationConfigTrait
{
    /**
     * @param DeleteOnlineEvaluationConfigRequest $args
     * @return DeleteOnlineEvaluationConfigResponse
     */
    public function deleteOnlineEvaluationConfig(DeleteOnlineEvaluationConfigRequest $args)
    {
        $result = parent::deleteOnlineEvaluationConfig($args->toArray());
        return new DeleteOnlineEvaluationConfigResponse($result->toArray());
    }
}
