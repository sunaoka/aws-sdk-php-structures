<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateContactEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Value
 */
class EvaluationNote extends Shape
{
    /**
     * @param array{Value?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
