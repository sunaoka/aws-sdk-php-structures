<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetEventPrediction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExternalModelSummary|null $externalModel
 * @property array<string, string>|null $outputs
 */
class ExternalModelOutputs extends Shape
{
    /**
     * @param array{
     *     externalModel?: ExternalModelSummary|null,
     *     outputs?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
