<?php

namespace Sunaoka\Aws\Structures\Bedrock\DeleteAutomatedReasoningPolicyBuildWorkflow;

trait DeleteAutomatedReasoningPolicyBuildWorkflowTrait
{
    /**
     * @param DeleteAutomatedReasoningPolicyBuildWorkflowRequest $args
     * @return DeleteAutomatedReasoningPolicyBuildWorkflowResponse
     */
    public function deleteAutomatedReasoningPolicyBuildWorkflow(DeleteAutomatedReasoningPolicyBuildWorkflowRequest $args)
    {
        $result = parent::deleteAutomatedReasoningPolicyBuildWorkflow($args->toArray());
        return new DeleteAutomatedReasoningPolicyBuildWorkflowResponse($result->toArray());
    }
}
