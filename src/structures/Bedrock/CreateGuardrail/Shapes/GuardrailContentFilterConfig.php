<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateGuardrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SEXUAL'|'VIOLENCE'|'HATE'|'INSULTS'|'MISCONDUCT'|'PROMPT_ATTACK' $type
 * @property 'NONE'|'LOW'|'MEDIUM'|'HIGH' $inputStrength
 * @property 'NONE'|'LOW'|'MEDIUM'|'HIGH' $outputStrength
 * @property list<'TEXT'|'IMAGE'> $inputModalities
 * @property list<'TEXT'|'IMAGE'> $outputModalities
 */
class GuardrailContentFilterConfig extends Shape
{
    /**
     * @param array{
     *     type: 'SEXUAL'|'VIOLENCE'|'HATE'|'INSULTS'|'MISCONDUCT'|'PROMPT_ATTACK',
     *     inputStrength: 'NONE'|'LOW'|'MEDIUM'|'HIGH',
     *     outputStrength: 'NONE'|'LOW'|'MEDIUM'|'HIGH',
     *     inputModalities?: list<'TEXT'|'IMAGE'>,
     *     outputModalities?: list<'TEXT'|'IMAGE'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
