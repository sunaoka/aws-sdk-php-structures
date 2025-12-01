<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeEvaluationForm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EvaluationFormNumericQuestionProperties|null $Numeric
 * @property EvaluationFormSingleSelectQuestionProperties|null $SingleSelect
 * @property EvaluationFormTextQuestionProperties|null $Text
 * @property EvaluationFormMultiSelectQuestionProperties|null $MultiSelect
 */
class EvaluationFormQuestionTypeProperties extends Shape
{
    /**
     * @param array{
     *     Numeric?: EvaluationFormNumericQuestionProperties|null,
     *     SingleSelect?: EvaluationFormSingleSelectQuestionProperties|null,
     *     Text?: EvaluationFormTextQuestionProperties|null,
     *     MultiSelect?: EvaluationFormMultiSelectQuestionProperties|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
