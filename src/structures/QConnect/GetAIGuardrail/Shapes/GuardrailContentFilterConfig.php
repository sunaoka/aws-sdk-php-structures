<?php

namespace Sunaoka\Aws\Structures\QConnect\GetAIGuardrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SEXUAL'|'VIOLENCE'|'HATE'|'INSULTS'|'MISCONDUCT'|'PROMPT_ATTACK' $type
 * @property 'NONE'|'LOW'|'MEDIUM'|'HIGH' $inputStrength
 * @property 'NONE'|'LOW'|'MEDIUM'|'HIGH' $outputStrength
 */
class GuardrailContentFilterConfig extends Shape
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
