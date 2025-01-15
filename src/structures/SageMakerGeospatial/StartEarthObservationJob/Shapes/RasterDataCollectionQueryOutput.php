<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\StartEarthObservationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AreaOfInterest|null $AreaOfInterest
 * @property PropertyFilters|null $PropertyFilters
 * @property string $RasterDataCollectionArn
 * @property string $RasterDataCollectionName
 * @property TimeRangeFilterOutput $TimeRangeFilter
 */
class RasterDataCollectionQueryOutput extends Shape
{
    /**
     * @param array{
     *     AreaOfInterest?: AreaOfInterest|null,
     *     PropertyFilters?: PropertyFilters|null,
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
