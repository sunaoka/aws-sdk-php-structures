<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ApplyGuardrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INSULTS'|'HATE'|'SEXUAL'|'VIOLENCE'|'MISCONDUCT'|'PROMPT_ATTACK' $type
 * @property 'NONE'|'LOW'|'MEDIUM'|'HIGH' $confidence
 * @property 'NONE'|'LOW'|'MEDIUM'|'HIGH'|null $filterStrength
 * @property 'BLOCKED'|'NONE' $action
 * @property bool|null $detected
 */
class GuardrailContentFilter extends Shape
{
    /**
     * @param array{
     *     type: 'INSULTS'|'HATE'|'SEXUAL'|'VIOLENCE'|'MISCONDUCT'|'PROMPT_ATTACK',
     *     confidence: 'NONE'|'LOW'|'MEDIUM'|'HIGH',
     *     filterStrength?: 'NONE'|'LOW'|'MEDIUM'|'HIGH'|null,
     *     action: 'BLOCKED'|'NONE',
     *     detected?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
