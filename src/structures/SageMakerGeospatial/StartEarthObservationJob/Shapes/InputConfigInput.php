<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\StartEarthObservationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PreviousEarthObservationJobArn
 * @property RasterDataCollectionQueryInput|null $RasterDataCollectionQuery
 */
class InputConfigInput extends Shape
{
    /**
     * @param array{
     *     PreviousEarthObservationJobArn?: string|null,
     *     RasterDataCollectionQuery?: RasterDataCollectionQueryInput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
