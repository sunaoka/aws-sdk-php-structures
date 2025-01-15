<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\GetEarthObservationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INTERPOLATION'|null $AlgorithmName
 * @property string|null $InterpolationValue
 * @property list<string>|null $TargetBands
 */
class CloudRemovalConfigInput extends Shape
{
    /**
     * @param array{
     *     AlgorithmName?: 'INTERPOLATION'|null,
     *     InterpolationValue?: string|null,
     *     TargetBands?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
