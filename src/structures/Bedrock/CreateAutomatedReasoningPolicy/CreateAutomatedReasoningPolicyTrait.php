<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateAutomatedReasoningPolicy;

trait CreateAutomatedReasoningPolicyTrait
{
    /**
     * @param CreateAutomatedReasoningPolicyRequest $args
     * @return CreateAutomatedReasoningPolicyResponse
     */
    public function createAutomatedReasoningPolicy(CreateAutomatedReasoningPolicyRequest $args)
    {
        $result = parent::createAutomatedReasoningPolicy($args->toArray());
        return new CreateAutomatedReasoningPolicyResponse($result->toArray());
    }
}
