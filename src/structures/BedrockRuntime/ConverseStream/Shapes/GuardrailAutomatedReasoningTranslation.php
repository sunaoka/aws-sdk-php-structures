<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<GuardrailAutomatedReasoningStatement>|null $premises
 * @property list<GuardrailAutomatedReasoningStatement>|null $claims
 * @property list<GuardrailAutomatedReasoningInputTextReference>|null $untranslatedPremises
 * @property list<GuardrailAutomatedReasoningInputTextReference>|null $untranslatedClaims
 * @property double|null $confidence
 */
class GuardrailAutomatedReasoningTranslation extends Shape
{
    /**
     * @param array{
     *     premises?: list<GuardrailAutomatedReasoningStatement>|null,
     *     claims?: list<GuardrailAutomatedReasoningStatement>|null,
     *     untranslatedPremises?: list<GuardrailAutomatedReasoningInputTextReference>|null,
     *     untranslatedClaims?: list<GuardrailAutomatedReasoningInputTextReference>|null,
     *     confidence?: double|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
