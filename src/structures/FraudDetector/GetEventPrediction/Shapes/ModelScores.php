<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetEventPrediction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ModelVersion $modelVersion
 * @property array<string, float> $scores
 */
class ModelScores extends Shape
{
    /**
     * @param array{
     *     modelVersion?: ModelVersion,
     *     scores?: array<string, float>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
