<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAutomatedReasoningPolicyBuildWorkflow;

trait GetAutomatedReasoningPolicyBuildWorkflowTrait
{
    /**
     * @param GetAutomatedReasoningPolicyBuildWorkflowRequest $args
     * @return GetAutomatedReasoningPolicyBuildWorkflowResponse
     */
    public function getAutomatedReasoningPolicyBuildWorkflow(GetAutomatedReasoningPolicyBuildWorkflowRequest $args)
    {
        $result = parent::getAutomatedReasoningPolicyBuildWorkflow($args->toArray());
        return new GetAutomatedReasoningPolicyBuildWorkflowResponse($result->toArray());
    }
}
