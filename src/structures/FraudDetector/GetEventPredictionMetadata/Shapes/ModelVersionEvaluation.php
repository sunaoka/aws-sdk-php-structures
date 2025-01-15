<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetEventPredictionMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $outputVariableName
 * @property string|null $evaluationScore
 * @property PredictionExplanations|null $predictionExplanations
 */
class ModelVersionEvaluation extends Shape
{
    /**
     * @param array{
     *     outputVariableName?: string|null,
     *     evaluationScore?: string|null,
     *     predictionExplanations?: PredictionExplanations|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
