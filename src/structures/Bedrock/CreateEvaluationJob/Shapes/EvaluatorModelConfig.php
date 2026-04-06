<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateEvaluationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<BedrockEvaluatorModel>|null $bedrockEvaluatorModels
 */
class EvaluatorModelConfig extends Shape
{
    /**
     * @param array{bedrockEvaluatorModels?: list<BedrockEvaluatorModel>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
