<?php

namespace Sunaoka\Aws\Structures\Bedrock\UpdateAutomatedReasoningPolicyTestCase;

trait UpdateAutomatedReasoningPolicyTestCaseTrait
{
    /**
     * @param UpdateAutomatedReasoningPolicyTestCaseRequest $args
     * @return UpdateAutomatedReasoningPolicyTestCaseResponse
     */
    public function updateAutomatedReasoningPolicyTestCase(UpdateAutomatedReasoningPolicyTestCaseRequest $args)
    {
        $result = parent::updateAutomatedReasoningPolicyTestCase($args->toArray());
        return new UpdateAutomatedReasoningPolicyTestCaseResponse($result->toArray());
    }
}
