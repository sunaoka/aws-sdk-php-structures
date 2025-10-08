<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAutomatedReasoningPolicy;

trait GetAutomatedReasoningPolicyTrait
{
    /**
     * @param GetAutomatedReasoningPolicyRequest $args
     * @return GetAutomatedReasoningPolicyResponse
     */
    public function getAutomatedReasoningPolicy(GetAutomatedReasoningPolicyRequest $args)
    {
        $result = parent::getAutomatedReasoningPolicy($args->toArray());
        return new GetAutomatedReasoningPolicyResponse($result->toArray());
    }
}
