<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\StartSearch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $timeSeriesIds
 * @property list<string>|null $datasetIds
 * @property list<TimeInterval>|null $timeIntervals
 */
class SearchFilters extends Shape
{
    /**
     * @param array{
     *     timeSeriesIds?: list<string>|null,
     *     datasetIds?: list<string>|null,
     *     timeIntervals?: list<TimeInterval>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
