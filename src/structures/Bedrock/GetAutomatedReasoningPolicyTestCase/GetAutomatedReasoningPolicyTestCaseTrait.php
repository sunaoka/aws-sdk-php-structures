<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAutomatedReasoningPolicyTestCase;

trait GetAutomatedReasoningPolicyTestCaseTrait
{
    /**
     * @param GetAutomatedReasoningPolicyTestCaseRequest $args
     * @return GetAutomatedReasoningPolicyTestCaseResponse
     */
    public function getAutomatedReasoningPolicyTestCase(GetAutomatedReasoningPolicyTestCaseRequest $args)
    {
        $result = parent::getAutomatedReasoningPolicyTestCase($args->toArray());
        return new GetAutomatedReasoningPolicyTestCaseResponse($result->toArray());
    }
}
