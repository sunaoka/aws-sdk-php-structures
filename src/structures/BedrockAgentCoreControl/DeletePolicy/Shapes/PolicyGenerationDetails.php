<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeletePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $policyGenerationId
 * @property string $policyGenerationAssetId
 */
class PolicyGenerationDetails extends Shape
{
    /**
     * @param array{
     *     policyGenerationId: string,
     *     policyGenerationAssetId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
