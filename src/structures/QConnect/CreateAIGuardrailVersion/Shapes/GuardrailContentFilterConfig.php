<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAIGuardrailVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NONE'|'LOW'|'MEDIUM'|'HIGH' $inputStrength
 * @property 'NONE'|'LOW'|'MEDIUM'|'HIGH' $outputStrength
 * @property 'SEXUAL'|'VIOLENCE'|'HATE'|'INSULTS'|'MISCONDUCT'|'PROMPT_ATTACK' $type
 */
class GuardrailContentFilterConfig extends Shape
{
    /**
     * @param array{
     *     inputStrength: 'NONE'|'LOW'|'MEDIUM'|'HIGH',
     *     outputStrength: 'NONE'|'LOW'|'MEDIUM'|'HIGH',
     *     type: 'SEXUAL'|'VIOLENCE'|'HATE'|'INSULTS'|'MISCONDUCT'|'PROMPT_ATTACK'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
