<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DescribeModelVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataValidationMetrics $dataValidationMetrics
 * @property TrainingMetricsV2 $trainingMetricsV2
 * @property VariableImportanceMetrics $variableImportanceMetrics
 * @property AggregatedVariablesImportanceMetrics $aggregatedVariablesImportanceMetrics
 */
class TrainingResultV2 extends Shape
{
    /**
     * @param array{
     *     dataValidationMetrics?: DataValidationMetrics,
     *     trainingMetricsV2?: TrainingMetricsV2,
     *     variableImportanceMetrics?: VariableImportanceMetrics,
     *     aggregatedVariablesImportanceMetrics?: AggregatedVariablesImportanceMetrics
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
