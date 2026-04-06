<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContactEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EvaluationAnswerData|null $Value
 * @property EvaluationAnswerData|null $SystemSuggestedValue
 */
class EvaluationAnswerOutput extends Shape
{
    /**
     * @param array{
     *     Value?: EvaluationAnswerData|null,
     *     SystemSuggestedValue?: EvaluationAnswerData|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
