<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetGuardrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SEXUAL'|'VIOLENCE'|'HATE'|'INSULTS'|'MISCONDUCT'|'PROMPT_ATTACK' $type
 * @property 'NONE'|'LOW'|'MEDIUM'|'HIGH' $inputStrength
 * @property 'NONE'|'LOW'|'MEDIUM'|'HIGH' $outputStrength
 */
class GuardrailContentFilter extends Shape
{
    /**
     * @param array{
     *     type: 'SEXUAL'|'VIOLENCE'|'HATE'|'INSULTS'|'MISCONDUCT'|'PROMPT_ATTACK',
     *     inputStrength: 'NONE'|'LOW'|'MEDIUM'|'HIGH',
     *     outputStrength: 'NONE'|'LOW'|'MEDIUM'|'HIGH'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
