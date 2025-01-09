<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\GetEarthObservationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PreviousEarthObservationJobArn
 * @property RasterDataCollectionQueryOutput $RasterDataCollectionQuery
 */
class InputConfigOutput extends Shape
{
    /**
     * @param array{
     *     PreviousEarthObservationJobArn?: string,
     *     RasterDataCollectionQuery?: RasterDataCollectionQueryOutput
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
