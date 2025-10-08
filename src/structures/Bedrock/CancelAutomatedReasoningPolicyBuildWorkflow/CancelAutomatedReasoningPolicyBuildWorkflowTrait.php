<?php

namespace Sunaoka\Aws\Structures\Bedrock\CancelAutomatedReasoningPolicyBuildWorkflow;

trait CancelAutomatedReasoningPolicyBuildWorkflowTrait
{
    /**
     * @param CancelAutomatedReasoningPolicyBuildWorkflowRequest $args
     * @return CancelAutomatedReasoningPolicyBuildWorkflowResponse
     */
    public function cancelAutomatedReasoningPolicyBuildWorkflow(CancelAutomatedReasoningPolicyBuildWorkflowRequest $args)
    {
        $result = parent::cancelAutomatedReasoningPolicyBuildWorkflow($args->toArray());
        return new CancelAutomatedReasoningPolicyBuildWorkflowResponse($result->toArray());
    }
}
