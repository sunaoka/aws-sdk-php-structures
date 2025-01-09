<?php

namespace Sunaoka\Aws\Structures\ConfigService\StartResourceEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EvaluationContextIdentifier
 */
class EvaluationContext extends Shape
{
    /**
     * @param array{EvaluationContextIdentifier?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
