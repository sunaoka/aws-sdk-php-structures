<?php

namespace Sunaoka\Aws\Structures\Bedrock\CreateEvaluationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AutomatedEvaluationCustomMetricSource> $customMetrics
 * @property CustomMetricEvaluatorModelConfig $evaluatorModelConfig
 */
class AutomatedEvaluationCustomMetricConfig extends Shape
{
    /**
     * @param array{
     *     customMetrics: list<AutomatedEvaluationCustomMetricSource>,
     *     evaluatorModelConfig: CustomMetricEvaluatorModelConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
