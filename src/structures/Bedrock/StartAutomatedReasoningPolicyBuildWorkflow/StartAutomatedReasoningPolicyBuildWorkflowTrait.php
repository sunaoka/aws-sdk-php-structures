<?php

namespace Sunaoka\Aws\Structures\Bedrock\StartAutomatedReasoningPolicyBuildWorkflow;

trait StartAutomatedReasoningPolicyBuildWorkflowTrait
{
    /**
     * @param StartAutomatedReasoningPolicyBuildWorkflowRequest $args
     * @return StartAutomatedReasoningPolicyBuildWorkflowResponse
     */
    public function startAutomatedReasoningPolicyBuildWorkflow(StartAutomatedReasoningPolicyBuildWorkflowRequest $args)
    {
        $result = parent::startAutomatedReasoningPolicyBuildWorkflow($args->toArray());
        return new StartAutomatedReasoningPolicyBuildWorkflowResponse($result->toArray());
    }
}
