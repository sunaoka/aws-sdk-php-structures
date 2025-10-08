<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\StartPolicyGeneration;

trait StartPolicyGenerationTrait
{
    /**
     * @param StartPolicyGenerationRequest $args
     * @return StartPolicyGenerationResponse
     */
    public function startPolicyGeneration(StartPolicyGenerationRequest $args)
    {
        $result = parent::startPolicyGeneration($args->toArray());
        return new StartPolicyGenerationResponse($result->toArray());
    }
}
