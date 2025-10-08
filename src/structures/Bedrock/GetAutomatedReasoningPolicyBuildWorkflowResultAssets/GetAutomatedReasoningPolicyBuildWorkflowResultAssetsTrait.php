<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAutomatedReasoningPolicyBuildWorkflowResultAssets;

trait GetAutomatedReasoningPolicyBuildWorkflowResultAssetsTrait
{
    /**
     * @param GetAutomatedReasoningPolicyBuildWorkflowResultAssetsRequest $args
     * @return GetAutomatedReasoningPolicyBuildWorkflowResultAssetsResponse
     */
    public function getAutomatedReasoningPolicyBuildWorkflowResultAssets(
        GetAutomatedReasoningPolicyBuildWorkflowResultAssetsRequest $args,
    ) {
        $result = parent::getAutomatedReasoningPolicyBuildWorkflowResultAssets($args->toArray());
        return new GetAutomatedReasoningPolicyBuildWorkflowResultAssetsResponse($result->toArray());
    }
}
