<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GuardrailTraceAssessment $guardrail
 * @property PromptRouterTrace $promptRouter
 */
class ConverseStreamTrace extends Shape
{
    /**
     * @param array{
     *     guardrail?: GuardrailTraceAssessment,
     *     promptRouter?: PromptRouterTrace
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
