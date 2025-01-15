<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\GetEarthObservationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PreviousEarthObservationJobArn
 * @property RasterDataCollectionQueryOutput|null $RasterDataCollectionQuery
 */
class InputConfigOutput extends Shape
{
    /**
     * @param array{
     *     PreviousEarthObservationJobArn?: string|null,
     *     RasterDataCollectionQuery?: RasterDataCollectionQueryOutput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
