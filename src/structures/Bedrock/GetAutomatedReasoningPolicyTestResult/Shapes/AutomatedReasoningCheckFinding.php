<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAutomatedReasoningPolicyTestResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutomatedReasoningCheckValidFinding|null $valid
 * @property AutomatedReasoningCheckInvalidFinding|null $invalid
 * @property AutomatedReasoningCheckSatisfiableFinding|null $satisfiable
 * @property AutomatedReasoningCheckImpossibleFinding|null $impossible
 * @property AutomatedReasoningCheckTranslationAmbiguousFinding|null $translationAmbiguous
 * @property AutomatedReasoningCheckTooComplexFinding|null $tooComplex
 * @property AutomatedReasoningCheckNoTranslationsFinding|null $noTranslations
 */
class AutomatedReasoningCheckFinding extends Shape
{
    /**
     * @param array{
     *     valid?: AutomatedReasoningCheckValidFinding|null,
     *     invalid?: AutomatedReasoningCheckInvalidFinding|null,
     *     satisfiable?: AutomatedReasoningCheckSatisfiableFinding|null,
     *     impossible?: AutomatedReasoningCheckImpossibleFinding|null,
     *     translationAmbiguous?: AutomatedReasoningCheckTranslationAmbiguousFinding|null,
     *     tooComplex?: AutomatedReasoningCheckTooComplexFinding|null,
     *     noTranslations?: AutomatedReasoningCheckNoTranslationsFinding|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
