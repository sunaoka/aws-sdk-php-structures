<?php

namespace Sunaoka\Aws\Structures\Comprehend\ListEntityRecognizers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $NumberOfTrainedDocuments
 * @property int|null $NumberOfTestDocuments
 * @property EntityRecognizerEvaluationMetrics|null $EvaluationMetrics
 * @property list<EntityRecognizerMetadataEntityTypesListItem>|null $EntityTypes
 */
class EntityRecognizerMetadata extends Shape
{
    /**
     * @param array{
     *     NumberOfTrainedDocuments?: int|null,
     *     NumberOfTestDocuments?: int|null,
     *     EvaluationMetrics?: EntityRecognizerEvaluationMetrics|null,
     *     EntityTypes?: list<EntityRecognizerMetadataEntityTypesListItem>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
