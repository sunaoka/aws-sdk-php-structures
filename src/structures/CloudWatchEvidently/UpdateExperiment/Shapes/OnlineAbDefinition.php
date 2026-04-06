<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\UpdateExperiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $controlTreatmentName
 * @property array<string, int<0, 100000>>|null $treatmentWeights
 */
class OnlineAbDefinition extends Shape
{
    /**
     * @param array{
     *     controlTreatmentName?: string|null,
     *     treatmentWeights?: array<string, int<0, 100000>>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
