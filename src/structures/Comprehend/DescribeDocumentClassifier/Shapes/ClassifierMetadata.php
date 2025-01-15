<?php

namespace Sunaoka\Aws\Structures\Comprehend\DescribeDocumentClassifier\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $NumberOfLabels
 * @property int|null $NumberOfTrainedDocuments
 * @property int|null $NumberOfTestDocuments
 * @property ClassifierEvaluationMetrics|null $EvaluationMetrics
 */
class ClassifierMetadata extends Shape
{
    /**
     * @param array{
     *     NumberOfLabels?: int|null,
     *     NumberOfTrainedDocuments?: int|null,
     *     NumberOfTestDocuments?: int|null,
     *     EvaluationMetrics?: ClassifierEvaluationMetrics|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
