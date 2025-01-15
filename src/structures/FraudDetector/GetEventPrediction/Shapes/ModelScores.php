<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetEventPrediction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ModelVersion|null $modelVersion
 * @property array<string, float>|null $scores
 */
class ModelScores extends Shape
{
    /**
     * @param array{
     *     modelVersion?: ModelVersion|null,
     *     scores?: array<string, float>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
