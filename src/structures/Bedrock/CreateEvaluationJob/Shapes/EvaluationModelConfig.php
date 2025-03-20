<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateEvaluationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EvaluationBedrockModel|null $bedrockModel
 * @property EvaluationPrecomputedInferenceSource|null $precomputedInferenceSource
 */
class EvaluationModelConfig extends Shape
{
    /**
     * @param array{
     *     bedrockModel?: EvaluationBedrockModel|null,
     *     precomputedInferenceSource?: EvaluationPrecomputedInferenceSource|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
