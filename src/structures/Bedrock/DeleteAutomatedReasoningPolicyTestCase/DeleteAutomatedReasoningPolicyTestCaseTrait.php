<?php

namespace Sunaoka\Aws\Structures\Bedrock\DeleteAutomatedReasoningPolicyTestCase;

trait DeleteAutomatedReasoningPolicyTestCaseTrait
{
    /**
     * @param DeleteAutomatedReasoningPolicyTestCaseRequest $args
     * @return DeleteAutomatedReasoningPolicyTestCaseResponse
     */
    public function deleteAutomatedReasoningPolicyTestCase(DeleteAutomatedReasoningPolicyTestCaseRequest $args)
    {
        $result = parent::deleteAutomatedReasoningPolicyTestCase($args->toArray());
        return new DeleteAutomatedReasoningPolicyTestCaseResponse($result->toArray());
    }
}
