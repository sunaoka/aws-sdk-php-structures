<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContactEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property NumericQuestionPropertyValueAutomation|null $PropertyValue
 * @property EvaluationFormQuestionAutomationAnswerSource|null $AnswerSource
 */
class EvaluationFormNumericQuestionAutomation extends Shape
{
    /**
     * @param array{
     *     PropertyValue?: NumericQuestionPropertyValueAutomation|null,
     *     AnswerSource?: EvaluationFormQuestionAutomationAnswerSource|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
