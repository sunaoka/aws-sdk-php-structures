<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\Converse\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GuardrailTraceAssessment|null $guardrail
 * @property PromptRouterTrace|null $promptRouter
 */
class ConverseTrace extends Shape
{
    /**
     * @param array{
     *     guardrail?: GuardrailTraceAssessment|null,
     *     promptRouter?: PromptRouterTrace|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
