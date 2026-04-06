<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListAutomatedReasoningPolicyBuildWorkflows;

trait ListAutomatedReasoningPolicyBuildWorkflowsTrait
{
    /**
     * @param ListAutomatedReasoningPolicyBuildWorkflowsRequest $args
     * @return ListAutomatedReasoningPolicyBuildWorkflowsResponse
     */
    public function listAutomatedReasoningPolicyBuildWorkflows(ListAutomatedReasoningPolicyBuildWorkflowsRequest $args)
    {
        $result = parent::listAutomatedReasoningPolicyBuildWorkflows($args->toArray());
        return new ListAutomatedReasoningPolicyBuildWorkflowsResponse($result->toArray());
    }
}
