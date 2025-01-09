<?php

namespace Sunaoka\Aws\Structures\DataZone\SearchListings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $forms
 * @property list<TimeSeriesDataPointSummaryFormOutput> $latestTimeSeriesDataPointForms
 */
class AssetListingItemAdditionalAttributes extends Shape
{
    /**
     * @param array{
     *     forms?: string,
     *     latestTimeSeriesDataPointForms?: list<TimeSeriesDataPointSummaryFormOutput>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
