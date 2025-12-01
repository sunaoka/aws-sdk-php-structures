<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BLOCKED'|null $action
 * @property 'NONE'|'LOW'|'MEDIUM'|'HIGH'|null $confidence
 * @property 'INSULTS'|'HATE'|'SEXUAL'|'VIOLENCE'|'MISCONDUCT'|'PROMPT_ATTACK'|null $type
 */
class GuardrailContentFilter extends Shape
{
    /**
     * @param array{
     *     action?: 'BLOCKED'|null,
     *     confidence?: 'NONE'|'LOW'|'MEDIUM'|'HIGH'|null,
     *     type?: 'INSULTS'|'HATE'|'SEXUAL'|'VIOLENCE'|'MISCONDUCT'|'PROMPT_ATTACK'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
