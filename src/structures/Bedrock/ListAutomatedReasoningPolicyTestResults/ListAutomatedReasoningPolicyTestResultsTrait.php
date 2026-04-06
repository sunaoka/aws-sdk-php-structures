<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListAutomatedReasoningPolicyTestResults;

trait ListAutomatedReasoningPolicyTestResultsTrait
{
    /**
     * @param ListAutomatedReasoningPolicyTestResultsRequest $args
     * @return ListAutomatedReasoningPolicyTestResultsResponse
     */
    public function listAutomatedReasoningPolicyTestResults(ListAutomatedReasoningPolicyTestResultsRequest $args)
    {
        $result = parent::listAutomatedReasoningPolicyTestResults($args->toArray());
        return new ListAutomatedReasoningPolicyTestResultsResponse($result->toArray());
    }
}
