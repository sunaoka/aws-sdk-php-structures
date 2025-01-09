<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateEvaluationForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SingleSelectQuestionRuleCategoryAutomation $RuleCategory
 */
class EvaluationFormSingleSelectQuestionAutomationOption extends Shape
{
    /**
     * @param array{RuleCategory?: SingleSelectQuestionRuleCategoryAutomation} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
