<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAutomatedReasoningPolicyTestResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutomatedReasoningCheckTranslation|null $translation
 * @property AutomatedReasoningCheckScenario|null $claimsTrueScenario
 * @property AutomatedReasoningCheckScenario|null $claimsFalseScenario
 * @property AutomatedReasoningCheckLogicWarning|null $logicWarning
 */
class AutomatedReasoningCheckSatisfiableFinding extends Shape
{
    /**
     * @param array{
     *     translation?: AutomatedReasoningCheckTranslation|null,
     *     claimsTrueScenario?: AutomatedReasoningCheckScenario|null,
     *     claimsFalseScenario?: AutomatedReasoningCheckScenario|null,
     *     logicWarning?: AutomatedReasoningCheckLogicWarning|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
