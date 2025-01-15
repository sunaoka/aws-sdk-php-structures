<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DescribeModelVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataValidationMetrics|null $dataValidationMetrics
 * @property TrainingMetricsV2|null $trainingMetricsV2
 * @property VariableImportanceMetrics|null $variableImportanceMetrics
 * @property AggregatedVariablesImportanceMetrics|null $aggregatedVariablesImportanceMetrics
 */
class TrainingResultV2 extends Shape
{
    /**
     * @param array{
     *     dataValidationMetrics?: DataValidationMetrics|null,
     *     trainingMetricsV2?: TrainingMetricsV2|null,
     *     variableImportanceMetrics?: VariableImportanceMetrics|null,
     *     aggregatedVariablesImportanceMetrics?: AggregatedVariablesImportanceMetrics|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
