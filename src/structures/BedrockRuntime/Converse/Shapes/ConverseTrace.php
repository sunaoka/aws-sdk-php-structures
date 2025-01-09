<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\Converse\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GuardrailTraceAssessment $guardrail
 * @property PromptRouterTrace $promptRouter
 */
class ConverseTrace extends Shape
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
