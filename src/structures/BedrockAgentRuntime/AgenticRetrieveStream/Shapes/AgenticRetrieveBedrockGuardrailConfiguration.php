<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\AgenticRetrieveStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $guardrailId
 * @property string $guardrailVersion
 */
class AgenticRetrieveBedrockGuardrailConfiguration extends Shape
{
    /**
     * @param array{
     *     guardrailId: string,
     *     guardrailVersion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
