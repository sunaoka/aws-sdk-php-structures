<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\Converse\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GuardrailAutomatedReasoningTranslation|null $translation
 * @property list<GuardrailAutomatedReasoningRule>|null $contradictingRules
 * @property GuardrailAutomatedReasoningLogicWarning|null $logicWarning
 */
class GuardrailAutomatedReasoningInvalidFinding extends Shape
{
    /**
     * @param array{
     *     translation?: GuardrailAutomatedReasoningTranslation|null,
     *     contradictingRules?: list<GuardrailAutomatedReasoningRule>|null,
     *     logicWarning?: GuardrailAutomatedReasoningLogicWarning|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
