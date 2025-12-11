<?php

namespace Sunaoka\Aws\Structures\Connect\CreateEvaluationForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EvaluationFormQuestionAutomationAnswerSource|null $AnswerSource
 */
class EvaluationFormTextQuestionAutomation extends Shape
{
    /**
     * @param array{AnswerSource?: EvaluationFormQuestionAutomationAnswerSource|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
