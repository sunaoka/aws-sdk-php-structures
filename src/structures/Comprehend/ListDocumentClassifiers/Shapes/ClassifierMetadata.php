<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListDocumentClassifiers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $NumberOfLabels
 * @property int $NumberOfTrainedDocuments
 * @property int $NumberOfTestDocuments
 * @property ClassifierEvaluationMetrics $EvaluationMetrics
 */
class ClassifierMetadata extends Shape
{
    /**
     * @param array{
     *     NumberOfLabels?: int,
     *     NumberOfTrainedDocuments?: int,
     *     NumberOfTestDocuments?: int,
     *     EvaluationMetrics?: ClassifierEvaluationMetrics
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
