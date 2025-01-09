<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ApplyGuardrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INSULTS'|'HATE'|'SEXUAL'|'VIOLENCE'|'MISCONDUCT'|'PROMPT_ATTACK' $type
 * @property 'NONE'|'LOW'|'MEDIUM'|'HIGH' $confidence
 * @property 'NONE'|'LOW'|'MEDIUM'|'HIGH' $filterStrength
 * @property 'BLOCKED' $action
 */
class GuardrailContentFilter extends Shape
{
    /**
     * @param array{
     *     type: 'INSULTS'|'HATE'|'SEXUAL'|'VIOLENCE'|'MISCONDUCT'|'PROMPT_ATTACK',
     *     confidence: 'NONE'|'LOW'|'MEDIUM'|'HIGH',
     *     filterStrength?: 'NONE'|'LOW'|'MEDIUM'|'HIGH',
     *     action: 'BLOCKED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
