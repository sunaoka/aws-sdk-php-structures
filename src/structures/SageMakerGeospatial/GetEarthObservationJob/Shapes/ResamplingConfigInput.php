<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\GetEarthObservationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NEAR'|'BILINEAR'|'CUBIC'|'CUBICSPLINE'|'LANCZOS'|'AVERAGE'|'RMS'|'MODE'|'MAX'|'MIN'|'MED'|'Q1'|'Q3'|'SUM'|null $AlgorithmName
 * @property OutputResolutionResamplingInput $OutputResolution
 * @property list<string>|null $TargetBands
 */
class ResamplingConfigInput extends Shape
{
    /**
     * @param array{
     *     AlgorithmName?: 'NEAR'|'BILINEAR'|'CUBIC'|'CUBICSPLINE'|'LANCZOS'|'AVERAGE'|'RMS'|'MODE'|'MAX'|'MIN'|'MED'|'Q1'|'Q3'|'SUM'|null,
     *     OutputResolution: OutputResolutionResamplingInput,
     *     TargetBands?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
