<?php

namespace Sunaoka\Aws\Structures\Bedrock\StartAutomatedReasoningPolicyTestWorkflow;

trait StartAutomatedReasoningPolicyTestWorkflowTrait
{
    /**
     * @param StartAutomatedReasoningPolicyTestWorkflowRequest $args
     * @return StartAutomatedReasoningPolicyTestWorkflowResponse
     */
    public function startAutomatedReasoningPolicyTestWorkflow(StartAutomatedReasoningPolicyTestWorkflowRequest $args)
    {
        $result = parent::startAutomatedReasoningPolicyTestWorkflow($args->toArray());
        return new StartAutomatedReasoningPolicyTestWorkflowResponse($result->toArray());
    }
}
