<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContactEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EvaluationAnswerData|null $Value
 * @property EvaluationAnswerData|null $SystemSuggestedValue
 * @property list<EvaluationSuggestedAnswer>|null $SuggestedAnswers
 */
class EvaluationAnswerOutput extends Shape
{
    /**
     * @param array{
     *     Value?: EvaluationAnswerData|null,
     *     SystemSuggestedValue?: EvaluationAnswerData|null,
     *     SuggestedAnswers?: list<EvaluationSuggestedAnswer>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
