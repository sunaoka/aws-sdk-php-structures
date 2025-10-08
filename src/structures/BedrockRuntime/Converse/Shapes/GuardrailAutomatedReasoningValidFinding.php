<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\Converse\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GuardrailAutomatedReasoningTranslation|null $translation
 * @property GuardrailAutomatedReasoningScenario|null $claimsTrueScenario
 * @property list<GuardrailAutomatedReasoningRule>|null $supportingRules
 * @property GuardrailAutomatedReasoningLogicWarning|null $logicWarning
 */
class GuardrailAutomatedReasoningValidFinding extends Shape
{
    /**
     * @param array{
     *     translation?: GuardrailAutomatedReasoningTranslation|null,
     *     claimsTrueScenario?: GuardrailAutomatedReasoningScenario|null,
     *     supportingRules?: list<GuardrailAutomatedReasoningRule>|null,
     *     logicWarning?: GuardrailAutomatedReasoningLogicWarning|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
