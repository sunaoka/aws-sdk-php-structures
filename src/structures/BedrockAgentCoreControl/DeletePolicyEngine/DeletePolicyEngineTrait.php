<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeletePolicyEngine;

trait DeletePolicyEngineTrait
{
    /**
     * @param DeletePolicyEngineRequest $args
     * @return DeletePolicyEngineResponse
     */
    public function deletePolicyEngine(DeletePolicyEngineRequest $args)
    {
        $result = parent::deletePolicyEngine($args->toArray());
        return new DeletePolicyEngineResponse($result->toArray());
    }
}
