<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateEvaluationForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EvaluationFormNumericQuestionProperties $Numeric
 * @property EvaluationFormSingleSelectQuestionProperties $SingleSelect
 */
class EvaluationFormQuestionTypeProperties extends Shape
{
    /**
     * @param array{
     *     Numeric?: EvaluationFormNumericQuestionProperties,
     *     SingleSelect?: EvaluationFormSingleSelectQuestionProperties
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
