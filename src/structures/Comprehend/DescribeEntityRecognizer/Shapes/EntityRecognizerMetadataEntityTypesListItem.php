<?php

namespace Sunaoka\Aws\Structures\Comprehend\DescribeEntityRecognizer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Type
 * @property EntityTypesEvaluationMetrics|null $EvaluationMetrics
 * @property int|null $NumberOfTrainMentions
 */
class EntityRecognizerMetadataEntityTypesListItem extends Shape
{
    /**
     * @param array{
     *     Type?: string|null,
     *     EvaluationMetrics?: EntityTypesEvaluationMetrics|null,
     *     NumberOfTrainMentions?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
