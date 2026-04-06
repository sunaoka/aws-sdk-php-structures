<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ApplyGuardrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GuardrailAutomatedReasoningTranslationOption>|null $options
 * @property list<GuardrailAutomatedReasoningScenario>|null $differenceScenarios
 */
class GuardrailAutomatedReasoningTranslationAmbiguousFinding extends Shape
{
    /**
     * @param array{
     *     options?: list<GuardrailAutomatedReasoningTranslationOption>|null,
     *     differenceScenarios?: list<GuardrailAutomatedReasoningScenario>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
