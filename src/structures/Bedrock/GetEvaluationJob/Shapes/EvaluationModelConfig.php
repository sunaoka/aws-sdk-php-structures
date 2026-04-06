<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetEvaluationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EvaluationBedrockModel|null $bedrockModel
 */
class EvaluationModelConfig extends Shape
{
    /**
     * @param array{bedrockModel?: EvaluationBedrockModel|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
