<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetEvaluationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<EvaluationModelConfig>|null $models
 */
class EvaluationInferenceConfig extends Shape
{
    /**
     * @param array{models?: list<EvaluationModelConfig>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
