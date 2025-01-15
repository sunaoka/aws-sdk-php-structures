<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DescribeModelVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DataValidationMetrics|null $dataValidationMetrics
 * @property TrainingMetrics|null $trainingMetrics
 * @property VariableImportanceMetrics|null $variableImportanceMetrics
 */
class TrainingResult extends Shape
{
    /**
     * @param array{
     *     dataValidationMetrics?: DataValidationMetrics|null,
     *     trainingMetrics?: TrainingMetrics|null,
     *     variableImportanceMetrics?: VariableImportanceMetrics|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
