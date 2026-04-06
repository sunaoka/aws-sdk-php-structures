<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreatePolicyEngine;

trait CreatePolicyEngineTrait
{
    /**
     * @param CreatePolicyEngineRequest $args
     * @return CreatePolicyEngineResponse
     */
    public function createPolicyEngine(CreatePolicyEngineRequest $args)
    {
        $result = parent::createPolicyEngine($args->toArray());
        return new CreatePolicyEngineResponse($result->toArray());
    }
}
