<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetEventPrediction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExternalModelSummary $externalModel
 * @property array<string, string> $outputs
 */
class ExternalModelOutputs extends Shape
{
    /**
     * @param array{
     *     externalModel?: ExternalModelSummary,
     *     outputs?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
