<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FilterId
 * @property ColumnIdentifier $Column
 * @property bool $IncludeMinimum
 * @property bool $IncludeMaximum
 * @property NumericRangeFilterValue $RangeMinimum
 * @property NumericRangeFilterValue $RangeMaximum
 * @property 'FILTER_ALL_VALUES' $SelectAllOptions
 * @property AggregationFunction $AggregationFunction
 * @property 'ALL_VALUES'|'NULLS_ONLY'|'NON_NULLS_ONLY' $NullOption
 * @property DefaultFilterControlConfiguration $DefaultFilterControlConfiguration
 */
class NumericRangeFilter extends Shape
{
    /**
     * @param array{
     *     FilterId: string,
     *     Column: ColumnIdentifier,
     *     IncludeMinimum?: bool,
     *     IncludeMaximum?: bool,
     *     RangeMinimum?: NumericRangeFilterValue,
     *     RangeMaximum?: NumericRangeFilterValue,
     *     SelectAllOptions?: 'FILTER_ALL_VALUES',
     *     AggregationFunction?: AggregationFunction,
     *     NullOption: 'ALL_VALUES'|'NULLS_ONLY'|'NON_NULLS_ONLY',
     *     DefaultFilterControlConfiguration?: DefaultFilterControlConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
