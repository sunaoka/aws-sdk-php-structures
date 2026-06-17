<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\AgenticRetrieveStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AgenticRetrieveBedrockGuardrailConfiguration|null $bedrockGuardrailConfiguration
 */
class AgenticRetrievePolicyConfiguration extends Shape
{
    /**
     * @param array{bedrockGuardrailConfiguration?: AgenticRetrieveBedrockGuardrailConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
