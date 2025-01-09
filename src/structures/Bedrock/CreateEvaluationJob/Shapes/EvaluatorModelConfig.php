<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateEvaluationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<BedrockEvaluatorModel> $bedrockEvaluatorModels
 */
class EvaluatorModelConfig extends Shape
{
    /**
     * @param array{bedrockEvaluatorModels?: list<BedrockEvaluatorModel>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
