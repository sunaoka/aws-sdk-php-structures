<?php

namespace Sunaoka\Aws\Structures\Bedrock\DeleteAutomatedReasoningPolicy;

trait DeleteAutomatedReasoningPolicyTrait
{
    /**
     * @param DeleteAutomatedReasoningPolicyRequest $args
     * @return DeleteAutomatedReasoningPolicyResponse
     */
    public function deleteAutomatedReasoningPolicy(DeleteAutomatedReasoningPolicyRequest $args)
    {
        $result = parent::deleteAutomatedReasoningPolicy($args->toArray());
        return new DeleteAutomatedReasoningPolicyResponse($result->toArray());
    }
}
