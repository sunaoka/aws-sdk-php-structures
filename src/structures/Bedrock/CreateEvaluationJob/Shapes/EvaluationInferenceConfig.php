<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateEvaluationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<EvaluationModelConfig>|null $models
 * @property list<RAGConfig>|null $ragConfigs
 */
class EvaluationInferenceConfig extends Shape
{
    /**
     * @param array{
     *     models?: list<EvaluationModelConfig>|null,
     *     ragConfigs?: list<RAGConfig>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
