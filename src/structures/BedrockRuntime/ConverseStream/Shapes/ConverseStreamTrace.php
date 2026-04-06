<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GuardrailTraceAssessment|null $guardrail
 */
class ConverseStreamTrace extends Shape
{
    /**
     * @param array{guardrail?: GuardrailTraceAssessment|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
