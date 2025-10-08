<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListAutomatedReasoningPolicyTestResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AutomatedReasoningCheckTranslation|null $translation
 * @property list<AutomatedReasoningCheckRule>|null $contradictingRules
 * @property AutomatedReasoningCheckLogicWarning|null $logicWarning
 */
class AutomatedReasoningCheckInvalidFinding extends Shape
{
    /**
     * @param array{
     *     translation?: AutomatedReasoningCheckTranslation|null,
     *     contradictingRules?: list<AutomatedReasoningCheckRule>|null,
     *     logicWarning?: AutomatedReasoningCheckLogicWarning|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
