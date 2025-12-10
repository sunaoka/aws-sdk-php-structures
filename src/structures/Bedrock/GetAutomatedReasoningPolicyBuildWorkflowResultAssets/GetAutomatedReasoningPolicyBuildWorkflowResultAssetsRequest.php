<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAutomatedReasoningPolicyBuildWorkflowResultAssets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyArn
 * @property string $buildWorkflowId
 * @property 'BUILD_LOG'|'QUALITY_REPORT'|'POLICY_DEFINITION'|'GENERATED_TEST_CASES'|'POLICY_SCENARIOS' $assetType
 */
class GetAutomatedReasoningPolicyBuildWorkflowResultAssetsRequest extends Request
{
    /**
     * @param array{
     *     policyArn: string,
     *     buildWorkflowId: string,
     *     assetType: 'BUILD_LOG'|'QUALITY_REPORT'|'POLICY_DEFINITION'|'GENERATED_TEST_CASES'|'POLICY_SCENARIOS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
