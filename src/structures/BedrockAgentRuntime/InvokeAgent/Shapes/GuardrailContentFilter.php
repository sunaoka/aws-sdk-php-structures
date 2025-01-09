<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BLOCKED' $action
 * @property 'NONE'|'LOW'|'MEDIUM'|'HIGH' $confidence
 * @property 'INSULTS'|'HATE'|'SEXUAL'|'VIOLENCE'|'MISCONDUCT'|'PROMPT_ATTACK' $type
 */
class GuardrailContentFilter extends Shape
{
    /**
     * @param array{
     *     action?: 'BLOCKED',
     *     confidence?: 'NONE'|'LOW'|'MEDIUM'|'HIGH',
     *     type?: 'INSULTS'|'HATE'|'SEXUAL'|'VIOLENCE'|'MISCONDUCT'|'PROMPT_ATTACK'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
