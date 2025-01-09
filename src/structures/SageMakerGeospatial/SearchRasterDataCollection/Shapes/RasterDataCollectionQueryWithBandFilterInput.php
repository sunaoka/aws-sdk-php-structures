<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\SearchRasterDataCollection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AreaOfInterest $AreaOfInterest
 * @property list<string> $BandFilter
 * @property PropertyFilters $PropertyFilters
 * @property TimeRangeFilterInput $TimeRangeFilter
 */
class RasterDataCollectionQueryWithBandFilterInput extends Shape
{
    /**
     * @param array{
     *     AreaOfInterest?: AreaOfInterest,
     *     BandFilter?: list<string>,
     *     PropertyFilters?: PropertyFilters,
     *     TimeRangeFilter: TimeRangeFilterInput
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
