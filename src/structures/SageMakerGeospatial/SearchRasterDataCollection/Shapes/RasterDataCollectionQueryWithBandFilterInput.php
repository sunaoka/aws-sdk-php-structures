<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\SearchRasterDataCollection\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AreaOfInterest|null $AreaOfInterest
 * @property list<string>|null $BandFilter
 * @property PropertyFilters|null $PropertyFilters
 * @property TimeRangeFilterInput $TimeRangeFilter
 */
class RasterDataCollectionQueryWithBandFilterInput extends Shape
{
    /**
     * @param array{
     *     AreaOfInterest?: AreaOfInterest|null,
     *     BandFilter?: list<string>|null,
     *     PropertyFilters?: PropertyFilters|null,
     *     TimeRangeFilter: TimeRangeFilterInput
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
