<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAutomatedReasoningPolicyTestResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AutomatedReasoningCheckTranslationOption>|null $options
 * @property list<AutomatedReasoningCheckScenario>|null $differenceScenarios
 */
class AutomatedReasoningCheckTranslationAmbiguousFinding extends Shape
{
    /**
     * @param array{
     *     options?: list<AutomatedReasoningCheckTranslationOption>|null,
     *     differenceScenarios?: list<AutomatedReasoningCheckScenario>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
