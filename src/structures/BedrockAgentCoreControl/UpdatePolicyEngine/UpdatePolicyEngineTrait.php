<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdatePolicyEngine;

trait UpdatePolicyEngineTrait
{
    /**
     * @param UpdatePolicyEngineRequest $args
     * @return UpdatePolicyEngineResponse
     */
    public function updatePolicyEngine(UpdatePolicyEngineRequest $args)
    {
        $result = parent::updatePolicyEngine($args->toArray());
        return new UpdatePolicyEngineResponse($result->toArray());
    }
}
