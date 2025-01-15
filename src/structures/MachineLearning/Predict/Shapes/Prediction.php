<?php

namespace Sunaoka\Aws\Structures\MachineLearning\Predict\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $predictedLabel
 * @property float|null $predictedValue
 * @property array<string, float>|null $predictedScores
 * @property array<'PredictiveModelType'|'Algorithm', string>|null $details
 */
class Prediction extends Shape
{
    /**
     * @param array{
     *     predictedLabel?: string|null,
     *     predictedValue?: float|null,
     *     predictedScores?: array<string, float>|null,
     *     details?: array<'PredictiveModelType'|'Algorithm', string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
