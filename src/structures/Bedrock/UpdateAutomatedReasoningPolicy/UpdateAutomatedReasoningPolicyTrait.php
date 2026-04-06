<?php

namespace Sunaoka\Aws\Structures\Bedrock\UpdateAutomatedReasoningPolicy;

trait UpdateAutomatedReasoningPolicyTrait
{
    /**
     * @param UpdateAutomatedReasoningPolicyRequest $args
     * @return UpdateAutomatedReasoningPolicyResponse
     */
    public function updateAutomatedReasoningPolicy(UpdateAutomatedReasoningPolicyRequest $args)
    {
        $result = parent::updateAutomatedReasoningPolicy($args->toArray());
        return new UpdateAutomatedReasoningPolicyResponse($result->toArray());
    }
}
