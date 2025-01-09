<?php

namespace Sunaoka\Aws\Structures\MachineLearning\Predict\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $predictedLabel
 * @property float $predictedValue
 * @property array<string, float> $predictedScores
 * @property array<'PredictiveModelType'|'Algorithm', string> $details
 */
class Prediction extends Shape
{
    /**
     * @param array{
     *     predictedLabel?: string,
     *     predictedValue?: float,
     *     predictedScores?: array<string, float>,
     *     details?: array<'PredictiveModelType'|'Algorithm', string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
