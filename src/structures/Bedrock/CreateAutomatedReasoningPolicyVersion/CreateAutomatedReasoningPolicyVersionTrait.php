<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateAutomatedReasoningPolicyVersion;

trait CreateAutomatedReasoningPolicyVersionTrait
{
    /**
     * @param CreateAutomatedReasoningPolicyVersionRequest $args
     * @return CreateAutomatedReasoningPolicyVersionResponse
     */
    public function createAutomatedReasoningPolicyVersion(CreateAutomatedReasoningPolicyVersionRequest $args)
    {
        $result = parent::createAutomatedReasoningPolicyVersion($args->toArray());
        return new CreateAutomatedReasoningPolicyVersionResponse($result->toArray());
    }
}
