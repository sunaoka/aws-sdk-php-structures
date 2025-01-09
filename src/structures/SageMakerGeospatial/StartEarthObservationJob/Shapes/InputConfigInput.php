<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\StartEarthObservationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PreviousEarthObservationJobArn
 * @property RasterDataCollectionQueryInput $RasterDataCollectionQuery
 */
class InputConfigInput extends Shape
{
    /**
     * @param array{
     *     PreviousEarthObservationJobArn?: string,
     *     RasterDataCollectionQuery?: RasterDataCollectionQueryInput
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
