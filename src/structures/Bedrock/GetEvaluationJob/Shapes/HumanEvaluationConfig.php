<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetEvaluationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HumanWorkflowConfig|null $humanWorkflowConfig
 * @property list<HumanEvaluationCustomMetric>|null $customMetrics
 * @property list<EvaluationDatasetMetricConfig> $datasetMetricConfigs
 */
class HumanEvaluationConfig extends Shape
{
    /**
     * @param array{
     *     humanWorkflowConfig?: HumanWorkflowConfig|null,
     *     customMetrics?: list<HumanEvaluationCustomMetric>|null,
     *     datasetMetricConfigs: list<EvaluationDatasetMetricConfig>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
