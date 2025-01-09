<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\StartEarthObservationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INTERPOLATION' $AlgorithmName
 * @property string $InterpolationValue
 * @property list<string> $TargetBands
 */
class CloudRemovalConfigInput extends Shape
{
    /**
     * @param array{
     *     AlgorithmName?: 'INTERPOLATION',
     *     InterpolationValue?: string,
     *     TargetBands?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
