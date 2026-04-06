<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContactEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<EvaluationFormSingleSelectQuestionAutomationOption>|null $Options
 * @property string|null $DefaultOptionRefId
 * @property EvaluationFormQuestionAutomationAnswerSource|null $AnswerSource
 */
class EvaluationFormSingleSelectQuestionAutomation extends Shape
{
    /**
     * @param array{
     *     Options?: list<EvaluationFormSingleSelectQuestionAutomationOption>|null,
     *     DefaultOptionRefId?: string|null,
     *     AnswerSource?: EvaluationFormQuestionAutomationAnswerSource|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
