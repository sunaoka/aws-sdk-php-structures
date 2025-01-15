<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\StartEarthObservationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AreaOfInterest|null $AreaOfInterest
 * @property PropertyFilters|null $PropertyFilters
 * @property string $RasterDataCollectionArn
 * @property TimeRangeFilterInput $TimeRangeFilter
 */
class RasterDataCollectionQueryInput extends Shape
{
    /**
     * @param array{
     *     AreaOfInterest?: AreaOfInterest|null,
     *     PropertyFilters?: PropertyFilters|null,
     *     RasterDataCollectionArn: string,
     *     TimeRangeFilter: TimeRangeFilterInput
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
