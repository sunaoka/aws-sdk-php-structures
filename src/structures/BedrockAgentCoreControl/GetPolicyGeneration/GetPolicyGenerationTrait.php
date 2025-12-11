<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetPolicyGeneration;

trait GetPolicyGenerationTrait
{
    /**
     * @param GetPolicyGenerationRequest $args
     * @return GetPolicyGenerationResponse
     */
    public function getPolicyGeneration(GetPolicyGenerationRequest $args)
    {
        $result = parent::getPolicyGeneration($args->toArray());
        return new GetPolicyGenerationResponse($result->toArray());
    }
}
