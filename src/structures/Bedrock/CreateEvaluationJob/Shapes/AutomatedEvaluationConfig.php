<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateEvaluationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<EvaluationDatasetMetricConfig> $datasetMetricConfigs
 * @property EvaluatorModelConfig $evaluatorModelConfig
 */
class AutomatedEvaluationConfig extends Shape
{
    /**
     * @param array{
     *     datasetMetricConfigs: list<EvaluationDatasetMetricConfig>,
     *     evaluatorModelConfig?: EvaluatorModelConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
