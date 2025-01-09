<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\RetrieveAndGenerateStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $guardrailId
 * @property string $guardrailVersion
 */
class GuardrailConfiguration extends Shape
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
