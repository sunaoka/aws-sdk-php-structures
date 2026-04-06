<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetPolicyEngine;

trait GetPolicyEngineTrait
{
    /**
     * @param GetPolicyEngineRequest $args
     * @return GetPolicyEngineResponse
     */
    public function getPolicyEngine(GetPolicyEngineRequest $args)
    {
        $result = parent::getPolicyEngine($args->toArray());
        return new GetPolicyEngineResponse($result->toArray());
    }
}
