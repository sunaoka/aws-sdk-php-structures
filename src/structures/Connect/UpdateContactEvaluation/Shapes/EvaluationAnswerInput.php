<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateContactEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EvaluationAnswerData|null $Value
 */
class EvaluationAnswerInput extends Shape
{
    /**
     * @param array{Value?: EvaluationAnswerData|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
