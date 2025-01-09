<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GuardrailContentFilter> $filters
 */
class GuardrailContentPolicyAssessment extends Shape
{
    /**
     * @param array{filters?: list<GuardrailContentFilter>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
