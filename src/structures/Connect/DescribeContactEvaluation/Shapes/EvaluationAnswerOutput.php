<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContactEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EvaluationAnswerData $Value
 * @property EvaluationAnswerData $SystemSuggestedValue
 */
class EvaluationAnswerOutput extends Shape
{
    /**
     * @param array{
     *     Value?: EvaluationAnswerData,
     *     SystemSuggestedValue?: EvaluationAnswerData
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
