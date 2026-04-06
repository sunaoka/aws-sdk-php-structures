<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAutomatedReasoningPolicyTestResult;

trait GetAutomatedReasoningPolicyTestResultTrait
{
    /**
     * @param GetAutomatedReasoningPolicyTestResultRequest $args
     * @return GetAutomatedReasoningPolicyTestResultResponse
     */
    public function getAutomatedReasoningPolicyTestResult(GetAutomatedReasoningPolicyTestResultRequest $args)
    {
        $result = parent::getAutomatedReasoningPolicyTestResult($args->toArray());
        return new GetAutomatedReasoningPolicyTestResultResponse($result->toArray());
    }
}
