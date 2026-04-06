<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GuardrailAutomatedReasoningValidFinding|null $valid
 * @property GuardrailAutomatedReasoningInvalidFinding|null $invalid
 * @property GuardrailAutomatedReasoningSatisfiableFinding|null $satisfiable
 * @property GuardrailAutomatedReasoningImpossibleFinding|null $impossible
 * @property GuardrailAutomatedReasoningTranslationAmbiguousFinding|null $translationAmbiguous
 * @property GuardrailAutomatedReasoningTooComplexFinding|null $tooComplex
 * @property GuardrailAutomatedReasoningNoTranslationsFinding|null $noTranslations
 */
class GuardrailAutomatedReasoningFinding extends Shape
{
    /**
     * @param array{
     *     valid?: GuardrailAutomatedReasoningValidFinding|null,
     *     invalid?: GuardrailAutomatedReasoningInvalidFinding|null,
     *     satisfiable?: GuardrailAutomatedReasoningSatisfiableFinding|null,
     *     impossible?: GuardrailAutomatedReasoningImpossibleFinding|null,
     *     translationAmbiguous?: GuardrailAutomatedReasoningTranslationAmbiguousFinding|null,
     *     tooComplex?: GuardrailAutomatedReasoningTooComplexFinding|null,
     *     noTranslations?: GuardrailAutomatedReasoningNoTranslationsFinding|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
