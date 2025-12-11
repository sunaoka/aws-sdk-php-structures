<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListPolicyGenerationAssets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $policyGenerationAssetId
 * @property PolicyDefinition|null $definition
 * @property string $rawTextFragment
 * @property list<Finding> $findings
 */
class PolicyGenerationAsset extends Shape
{
    /**
     * @param array{
     *     policyGenerationAssetId: string,
     *     definition?: PolicyDefinition|null,
     *     rawTextFragment: string,
     *     findings: list<Finding>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
