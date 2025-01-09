<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateContactEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Value
 */
class EvaluationNote extends Shape
{
    /**
     * @param array{Value?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
