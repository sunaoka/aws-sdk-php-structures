<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateEvaluationForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<EvaluationFormMultiSelectQuestionAutomationOption>|null $Options
 * @property list<string>|null $DefaultOptionRefIds
 * @property EvaluationFormQuestionAutomationAnswerSource|null $AnswerSource
 */
class EvaluationFormMultiSelectQuestionAutomation extends Shape
{
    /**
     * @param array{
     *     Options?: list<EvaluationFormMultiSelectQuestionAutomationOption>|null,
     *     DefaultOptionRefIds?: list<string>|null,
     *     AnswerSource?: EvaluationFormQuestionAutomationAnswerSource|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
