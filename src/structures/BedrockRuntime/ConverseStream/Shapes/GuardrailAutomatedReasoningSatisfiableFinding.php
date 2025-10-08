<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GuardrailAutomatedReasoningTranslation|null $translation
 * @property GuardrailAutomatedReasoningScenario|null $claimsTrueScenario
 * @property GuardrailAutomatedReasoningScenario|null $claimsFalseScenario
 * @property GuardrailAutomatedReasoningLogicWarning|null $logicWarning
 */
class GuardrailAutomatedReasoningSatisfiableFinding extends Shape
{
    /**
     * @param array{
     *     translation?: GuardrailAutomatedReasoningTranslation|null,
     *     claimsTrueScenario?: GuardrailAutomatedReasoningScenario|null,
     *     claimsFalseScenario?: GuardrailAutomatedReasoningScenario|null,
     *     logicWarning?: GuardrailAutomatedReasoningLogicWarning|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
