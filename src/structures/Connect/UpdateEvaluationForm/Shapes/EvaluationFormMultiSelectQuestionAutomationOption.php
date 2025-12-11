<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateEvaluationForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MultiSelectQuestionRuleCategoryAutomation|null $RuleCategory
 */
class EvaluationFormMultiSelectQuestionAutomationOption extends Shape
{
    /**
     * @param array{RuleCategory?: MultiSelectQuestionRuleCategoryAutomation|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
