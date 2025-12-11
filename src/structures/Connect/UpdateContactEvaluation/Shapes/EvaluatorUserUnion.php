<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateContactEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ConnectUserArn
 */
class EvaluatorUserUnion extends Shape
{
    /**
     * @param array{ConnectUserArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
