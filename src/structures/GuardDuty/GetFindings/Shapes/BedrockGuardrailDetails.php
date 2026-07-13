<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $GuardrailArn
 * @property string|null $GuardrailVersion
 * @property list<BedrockGuardrail>|null $Guardrails
 * @property 'GUARDRAIL_INTERVENED'|'NONE'|null $GuardrailAction
 * @property 'INPUT'|'OUTPUT'|null $GuardrailSource
 * @property list<ContentPolicyFilter>|null $ContentPolicyFilters
 */
class BedrockGuardrailDetails extends Shape
{
    /**
     * @param array{
     *     GuardrailArn?: string|null,
     *     GuardrailVersion?: string|null,
     *     Guardrails?: list<BedrockGuardrail>|null,
     *     GuardrailAction?: 'GUARDRAIL_INTERVENED'|'NONE'|null,
     *     GuardrailSource?: 'INPUT'|'OUTPUT'|null,
     *     ContentPolicyFilters?: list<ContentPolicyFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
