<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAutomatedReasoningPolicyBuildWorkflowResultAssets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $policyArn
 * @property string $buildWorkflowId
 * @property 'BUILD_LOG'|'QUALITY_REPORT'|'POLICY_DEFINITION'|'GENERATED_TEST_CASES'|'POLICY_SCENARIOS'|'FIDELITY_REPORT'|'ASSET_MANIFEST'|'SOURCE_DOCUMENT' $assetType
 * @property string|null $assetId
 */
class GetAutomatedReasoningPolicyBuildWorkflowResultAssetsRequest extends Request
{
    /**
     * @param array{
     *     policyArn: string,
     *     buildWorkflowId: string,
     *     assetType: 'BUILD_LOG'|'QUALITY_REPORT'|'POLICY_DEFINITION'|'GENERATED_TEST_CASES'|'POLICY_SCENARIOS'|'FIDELITY_REPORT'|'ASSET_MANIFEST'|'SOURCE_DOCUMENT',
     *     assetId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
