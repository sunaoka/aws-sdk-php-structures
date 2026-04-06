<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FilterId
 * @property ColumnIdentifier $Column
 * @property bool|null $IncludeMinimum
 * @property bool|null $IncludeMaximum
 * @property NumericRangeFilterValue|null $RangeMinimum
 * @property NumericRangeFilterValue|null $RangeMaximum
 * @property 'FILTER_ALL_VALUES'|null $SelectAllOptions
 * @property AggregationFunction|null $AggregationFunction
 * @property 'ALL_VALUES'|'NULLS_ONLY'|'NON_NULLS_ONLY' $NullOption
 * @property DefaultFilterControlConfiguration|null $DefaultFilterControlConfiguration
 */
class NumericRangeFilter extends Shape
{
    /**
     * @param array{
     *     FilterId: string,
     *     Column: ColumnIdentifier,
     *     IncludeMinimum?: bool|null,
     *     IncludeMaximum?: bool|null,
     *     RangeMinimum?: NumericRangeFilterValue|null,
     *     RangeMaximum?: NumericRangeFilterValue|null,
     *     SelectAllOptions?: 'FILTER_ALL_VALUES'|null,
     *     AggregationFunction?: AggregationFunction|null,
     *     NullOption: 'ALL_VALUES'|'NULLS_ONLY'|'NON_NULLS_ONLY',
     *     DefaultFilterControlConfiguration?: DefaultFilterControlConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
