<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateEvaluationForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EvaluationFormNumericQuestionProperties|null $Numeric
 * @property EvaluationFormSingleSelectQuestionProperties|null $SingleSelect
 */
class EvaluationFormQuestionTypeProperties extends Shape
{
    /**
     * @param array{
     *     Numeric?: EvaluationFormNumericQuestionProperties|null,
     *     SingleSelect?: EvaluationFormSingleSelectQuestionProperties|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
