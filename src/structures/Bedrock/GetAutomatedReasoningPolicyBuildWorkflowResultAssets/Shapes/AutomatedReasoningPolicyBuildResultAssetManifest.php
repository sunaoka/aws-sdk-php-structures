<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAutomatedReasoningPolicyBuildWorkflowResultAssets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AutomatedReasoningPolicyBuildResultAssetManifestEntry> $entries
 */
class AutomatedReasoningPolicyBuildResultAssetManifest extends Shape
{
    /**
     * @param array{entries: list<AutomatedReasoningPolicyBuildResultAssetManifestEntry>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
