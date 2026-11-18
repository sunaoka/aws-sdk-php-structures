<?php

namespace Sunaoka\Aws\Structures\Connect\CreateEvaluationForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SingleSelectQuestionRuleCategoryAutomation|null $RuleCategory
 * @property SingleSelectQuestionAutomationRule|null $AutomationRule
 */
class EvaluationFormSingleSelectQuestionAutomationOption extends Shape
{
    /**
     * @param array{
     *     RuleCategory?: SingleSelectQuestionRuleCategoryAutomation|null,
     *     AutomationRule?: SingleSelectQuestionAutomationRule|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
