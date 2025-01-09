<?php

namespace Sunaoka\Aws\Structures\Comprehend\DescribeEntityRecognizer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $NumberOfTrainedDocuments
 * @property int $NumberOfTestDocuments
 * @property EntityRecognizerEvaluationMetrics $EvaluationMetrics
 * @property list<EntityRecognizerMetadataEntityTypesListItem> $EntityTypes
 */
class EntityRecognizerMetadata extends Shape
{
    /**
     * @param array{
     *     NumberOfTrainedDocuments?: int,
     *     NumberOfTestDocuments?: int,
     *     EvaluationMetrics?: EntityRecognizerEvaluationMetrics,
     *     EntityTypes?: list<EntityRecognizerMetadataEntityTypesListItem>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
