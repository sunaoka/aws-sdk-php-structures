<?php

namespace Sunaoka\Aws\Structures\DataZone\SearchListings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $forms
 * @property list<TimeSeriesDataPointSummaryFormOutput>|null $latestTimeSeriesDataPointForms
 */
class AssetListingItemAdditionalAttributes extends Shape
{
    /**
     * @param array{
     *     forms?: string|null,
     *     latestTimeSeriesDataPointForms?: list<TimeSeriesDataPointSummaryFormOutput>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
