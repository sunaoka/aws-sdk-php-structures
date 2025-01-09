<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DescribeModelVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataValidationMetrics $dataValidationMetrics
 * @property TrainingMetrics $trainingMetrics
 * @property VariableImportanceMetrics $variableImportanceMetrics
 */
class TrainingResult extends Shape
{
    /**
     * @param array{
     *     dataValidationMetrics?: DataValidationMetrics,
     *     trainingMetrics?: TrainingMetrics,
     *     variableImportanceMetrics?: VariableImportanceMetrics
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
