<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetEvaluationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<EvaluationDatasetMetricConfig> $datasetMetricConfigs
 */
class AutomatedEvaluationConfig extends Shape
{
    /**
     * @param array{datasetMetricConfigs: list<EvaluationDatasetMetricConfig>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
