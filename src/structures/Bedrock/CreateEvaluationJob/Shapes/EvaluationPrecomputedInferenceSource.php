<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateEvaluationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $inferenceSourceIdentifier
 */
class EvaluationPrecomputedInferenceSource extends Shape
{
    /**
     * @param array{inferenceSourceIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
