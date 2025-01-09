<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetEventPredictionMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $outputVariableName
 * @property string $evaluationScore
 * @property PredictionExplanations $predictionExplanations
 */
class ModelVersionEvaluation extends Shape
{
    /**
     * @param array{
     *     outputVariableName?: string,
     *     evaluationScore?: string,
     *     predictionExplanations?: PredictionExplanations
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
