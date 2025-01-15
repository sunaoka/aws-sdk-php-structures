<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetResourceEvaluationSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EvaluationContextIdentifier
 */
class EvaluationContext extends Shape
{
    /**
     * @param array{EvaluationContextIdentifier?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
