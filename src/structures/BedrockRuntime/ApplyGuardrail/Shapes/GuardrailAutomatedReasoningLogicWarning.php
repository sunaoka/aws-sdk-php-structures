<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ApplyGuardrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALWAYS_FALSE'|'ALWAYS_TRUE'|null $type
 * @property list<GuardrailAutomatedReasoningStatement>|null $premises
 * @property list<GuardrailAutomatedReasoningStatement>|null $claims
 */
class GuardrailAutomatedReasoningLogicWarning extends Shape
{
    /**
     * @param array{
     *     type?: 'ALWAYS_FALSE'|'ALWAYS_TRUE'|null,
     *     premises?: list<GuardrailAutomatedReasoningStatement>|null,
     *     claims?: list<GuardrailAutomatedReasoningStatement>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
