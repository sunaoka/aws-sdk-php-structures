<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetAutomatedReasoningPolicyTestResult\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutomatedReasoningCheckTranslation|null $translation
 * @property AutomatedReasoningCheckScenario|null $claimsTrueScenario
 * @property list<AutomatedReasoningCheckRule>|null $supportingRules
 * @property AutomatedReasoningCheckLogicWarning|null $logicWarning
 */
class AutomatedReasoningCheckValidFinding extends Shape
{
    /**
     * @param array{
     *     translation?: AutomatedReasoningCheckTranslation|null,
     *     claimsTrueScenario?: AutomatedReasoningCheckScenario|null,
     *     supportingRules?: list<AutomatedReasoningCheckRule>|null,
     *     logicWarning?: AutomatedReasoningCheckLogicWarning|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
