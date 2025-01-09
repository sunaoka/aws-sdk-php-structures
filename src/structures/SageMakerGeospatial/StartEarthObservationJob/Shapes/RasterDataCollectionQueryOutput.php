<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\StartEarthObservationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AreaOfInterest $AreaOfInterest
 * @property PropertyFilters $PropertyFilters
 * @property string $RasterDataCollectionArn
 * @property string $RasterDataCollectionName
 * @property TimeRangeFilterOutput $TimeRangeFilter
 */
class RasterDataCollectionQueryOutput extends Shape
{
    /**
     * @param array{
     *     AreaOfInterest?: AreaOfInterest,
     *     PropertyFilters?: PropertyFilters,
     *     RasterDataCollectionArn: string,
     *     RasterDataCollectionName: string,
     *     TimeRangeFilter: TimeRangeFilterOutput
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
