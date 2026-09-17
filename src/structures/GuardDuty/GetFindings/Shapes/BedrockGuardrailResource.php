<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Version
 * @property 'GUARDRAIL_INTERVENED'|'NONE'|null $GuardrailAction
 * @property 'INPUT'|'OUTPUT'|null $GuardrailSource
 */
class BedrockGuardrailResource extends Shape
{
    /**
     * @param array{
     *     Version?: string|null,
     *     GuardrailAction?: 'GUARDRAIL_INTERVENED'|'NONE'|null,
     *     GuardrailSource?: 'INPUT'|'OUTPUT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
