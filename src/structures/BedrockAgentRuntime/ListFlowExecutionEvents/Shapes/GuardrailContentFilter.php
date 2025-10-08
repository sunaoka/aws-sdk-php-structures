<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListFlowExecutionEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INSULTS'|'HATE'|'SEXUAL'|'VIOLENCE'|'MISCONDUCT'|'PROMPT_ATTACK'|null $type
 * @property 'NONE'|'LOW'|'MEDIUM'|'HIGH'|null $confidence
 * @property 'BLOCKED'|null $action
 */
class GuardrailContentFilter extends Shape
{
    /**
     * @param array{
     *     type?: 'INSULTS'|'HATE'|'SEXUAL'|'VIOLENCE'|'MISCONDUCT'|'PROMPT_ATTACK'|null,
     *     confidence?: 'NONE'|'LOW'|'MEDIUM'|'HIGH'|null,
     *     action?: 'BLOCKED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
