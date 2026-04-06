<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateEvaluationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CustomMetricBedrockEvaluatorModel> $bedrockEvaluatorModels
 */
class CustomMetricEvaluatorModelConfig extends Shape
{
    /**
     * @param array{bedrockEvaluatorModels: list<CustomMetricBedrockEvaluatorModel>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
