<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListAutomatedReasoningPolicyTestCases;

trait ListAutomatedReasoningPolicyTestCasesTrait
{
    /**
     * @param ListAutomatedReasoningPolicyTestCasesRequest $args
     * @return ListAutomatedReasoningPolicyTestCasesResponse
     */
    public function listAutomatedReasoningPolicyTestCases(ListAutomatedReasoningPolicyTestCasesRequest $args)
    {
        $result = parent::listAutomatedReasoningPolicyTestCases($args->toArray());
        return new ListAutomatedReasoningPolicyTestCasesResponse($result->toArray());
    }
}
