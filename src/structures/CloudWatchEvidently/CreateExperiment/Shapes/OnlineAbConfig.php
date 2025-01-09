<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\CreateExperiment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $controlTreatmentName
 * @property array<string, int<0, 100000>> $treatmentWeights
 */
class OnlineAbConfig extends Shape
{
    /**
     * @param array{
     *     controlTreatmentName?: string,
     *     treatmentWeights?: array<string, int<0, 100000>>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
