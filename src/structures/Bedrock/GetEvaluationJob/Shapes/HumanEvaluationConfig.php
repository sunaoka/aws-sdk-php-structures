<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetEvaluationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HumanWorkflowConfig $humanWorkflowConfig
 * @property list<HumanEvaluationCustomMetric> $customMetrics
 * @property list<EvaluationDatasetMetricConfig> $datasetMetricConfigs
 */
class HumanEvaluationConfig extends Shape
{
    /**
     * @param array{
     *     humanWorkflowConfig?: HumanWorkflowConfig,
     *     customMetrics?: list<HumanEvaluationCustomMetric>,
     *     datasetMetricConfigs: list<EvaluationDatasetMetricConfig>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
