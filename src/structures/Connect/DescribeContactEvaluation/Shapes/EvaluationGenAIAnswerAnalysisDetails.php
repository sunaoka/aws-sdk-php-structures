<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContactEvaluation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Justification
 * @property list<EvaluationTranscriptPointOfInterest>|null $PointsOfInterest
 */
class EvaluationGenAIAnswerAnalysisDetails extends Shape
{
    /**
     * @param array{
     *     Justification?: string|null,
     *     PointsOfInterest?: list<EvaluationTranscriptPointOfInterest>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
