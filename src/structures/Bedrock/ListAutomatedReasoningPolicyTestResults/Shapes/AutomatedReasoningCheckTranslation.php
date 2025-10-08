<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListAutomatedReasoningPolicyTestResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AutomatedReasoningLogicStatement>|null $premises
 * @property list<AutomatedReasoningLogicStatement> $claims
 * @property list<AutomatedReasoningCheckInputTextReference>|null $untranslatedPremises
 * @property list<AutomatedReasoningCheckInputTextReference>|null $untranslatedClaims
 * @property double $confidence
 */
class AutomatedReasoningCheckTranslation extends Shape
{
    /**
     * @param array{
     *     premises?: list<AutomatedReasoningLogicStatement>|null,
     *     claims: list<AutomatedReasoningLogicStatement>,
     *     untranslatedPremises?: list<AutomatedReasoningCheckInputTextReference>|null,
     *     untranslatedClaims?: list<AutomatedReasoningCheckInputTextReference>|null,
     *     confidence: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
