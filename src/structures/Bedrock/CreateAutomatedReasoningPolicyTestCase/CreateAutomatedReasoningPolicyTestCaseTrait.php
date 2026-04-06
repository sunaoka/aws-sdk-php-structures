<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateAutomatedReasoningPolicyTestCase;

trait CreateAutomatedReasoningPolicyTestCaseTrait
{
    /**
     * @param CreateAutomatedReasoningPolicyTestCaseRequest $args
     * @return CreateAutomatedReasoningPolicyTestCaseResponse
     */
    public function createAutomatedReasoningPolicyTestCase(CreateAutomatedReasoningPolicyTestCaseRequest $args)
    {
        $result = parent::createAutomatedReasoningPolicyTestCase($args->toArray());
        return new CreateAutomatedReasoningPolicyTestCaseResponse($result->toArray());
    }
}
