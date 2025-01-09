<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateEvaluationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<EvaluationModelConfig> $models
 * @property list<RAGConfig> $ragConfigs
 */
class EvaluationInferenceConfig extends Shape
{
    /**
     * @param array{
     *     models?: list<EvaluationModelConfig>,
     *     ragConfigs?: list<RAGConfig>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
