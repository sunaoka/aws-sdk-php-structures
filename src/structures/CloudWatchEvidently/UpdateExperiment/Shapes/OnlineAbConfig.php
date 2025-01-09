<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\UpdateExperiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $controlTreatmentName
 * @property array<string, int> $treatmentWeights
 */
class OnlineAbConfig extends Shape
{
    /**
     * @param array{
     *     controlTreatmentName?: string,
     *     treatmentWeights?: array<string, int>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
