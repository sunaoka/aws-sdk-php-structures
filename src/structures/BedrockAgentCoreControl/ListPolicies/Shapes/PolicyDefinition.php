<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListPolicies\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CedarPolicy|null $cedar
 * @property PolicyGenerationDetails|null $policyGeneration
 * @property PolicyStatement|null $policy
 */
class PolicyDefinition extends Shape
{
    /**
     * @param array{
     *     cedar?: CedarPolicy|null,
     *     policyGeneration?: PolicyGenerationDetails|null,
     *     policy?: PolicyStatement|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
