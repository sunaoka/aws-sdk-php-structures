<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateEvaluationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EvaluationBedrockModel $bedrockModel
 */
class EvaluationModelConfig extends Shape
{
    /**
     * @param array{bedrockModel?: EvaluationBedrockModel} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
