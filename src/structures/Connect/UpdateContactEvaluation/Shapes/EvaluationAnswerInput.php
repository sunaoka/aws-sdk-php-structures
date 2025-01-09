<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateContactEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EvaluationAnswerData $Value
 */
class EvaluationAnswerInput extends Shape
{
    /**
     * @param array{Value?: EvaluationAnswerData} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
