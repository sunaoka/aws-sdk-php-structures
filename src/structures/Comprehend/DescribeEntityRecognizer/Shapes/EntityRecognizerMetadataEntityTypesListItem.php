<?php

namespace Sunaoka\Aws\Structures\Comprehend\DescribeEntityRecognizer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Type
 * @property EntityTypesEvaluationMetrics $EvaluationMetrics
 * @property int $NumberOfTrainMentions
 */
class EntityRecognizerMetadataEntityTypesListItem extends Shape
{
    /**
     * @param array{
     *     Type?: string,
     *     EvaluationMetrics?: EntityTypesEvaluationMetrics,
     *     NumberOfTrainMentions?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
