<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreatePolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CedarPolicy|null $cedar
 * @property PolicyGenerationDetails|null $policyGeneration
 */
class PolicyDefinition extends Shape
{
    /**
     * @param array{
     *     cedar?: CedarPolicy|null,
     *     policyGeneration?: PolicyGenerationDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
