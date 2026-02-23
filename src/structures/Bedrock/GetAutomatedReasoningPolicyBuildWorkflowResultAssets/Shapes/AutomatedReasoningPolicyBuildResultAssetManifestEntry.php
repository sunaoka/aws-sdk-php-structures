<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAutomatedReasoningPolicyBuildWorkflowResultAssets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BUILD_LOG'|'QUALITY_REPORT'|'POLICY_DEFINITION'|'GENERATED_TEST_CASES'|'POLICY_SCENARIOS'|'FIDELITY_REPORT'|'ASSET_MANIFEST'|'SOURCE_DOCUMENT' $assetType
 * @property string|null $assetName
 * @property string|null $assetId
 */
class AutomatedReasoningPolicyBuildResultAssetManifestEntry extends Shape
{
    /**
     * @param array{
     *     assetType: 'BUILD_LOG'|'QUALITY_REPORT'|'POLICY_DEFINITION'|'GENERATED_TEST_CASES'|'POLICY_SCENARIOS'|'FIDELITY_REPORT'|'ASSET_MANIFEST'|'SOURCE_DOCUMENT',
     *     assetName?: string|null,
     *     assetId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
