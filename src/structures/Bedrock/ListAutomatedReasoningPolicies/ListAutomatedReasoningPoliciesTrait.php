<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListAutomatedReasoningPolicies;

trait ListAutomatedReasoningPoliciesTrait
{
    /**
     * @param ListAutomatedReasoningPoliciesRequest $args
     * @return ListAutomatedReasoningPoliciesResponse
     */
    public function listAutomatedReasoningPolicies(ListAutomatedReasoningPoliciesRequest $args)
    {
        $result = parent::listAutomatedReasoningPolicies($args->toArray());
        return new ListAutomatedReasoningPoliciesResponse($result->toArray());
    }
}
