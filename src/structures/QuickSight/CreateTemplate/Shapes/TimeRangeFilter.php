<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FilterId
 * @property ColumnIdentifier $Column
 * @property bool $IncludeMinimum
 * @property bool $IncludeMaximum
 * @property TimeRangeFilterValue $RangeMinimumValue
 * @property TimeRangeFilterValue $RangeMaximumValue
 * @property 'ALL_VALUES'|'NULLS_ONLY'|'NON_NULLS_ONLY' $NullOption
 * @property ExcludePeriodConfiguration $ExcludePeriodConfiguration
 * @property 'YEAR'|'QUARTER'|'MONTH'|'WEEK'|'DAY'|'HOUR'|'MINUTE'|'SECOND'|'MILLISECOND' $TimeGranularity
 * @property DefaultFilterControlConfiguration $DefaultFilterControlConfiguration
 */
class TimeRangeFilter extends Shape
{
    /**
     * @param array{
     *     FilterId: string,
     *     Column: ColumnIdentifier,
     *     IncludeMinimum?: bool,
     *     IncludeMaximum?: bool,
     *     RangeMinimumValue?: TimeRangeFilterValue,
     *     RangeMaximumValue?: TimeRangeFilterValue,
     *     NullOption: 'ALL_VALUES'|'NULLS_ONLY'|'NON_NULLS_ONLY',
     *     ExcludePeriodConfiguration?: ExcludePeriodConfiguration,
     *     TimeGranularity?: 'YEAR'|'QUARTER'|'MONTH'|'WEEK'|'DAY'|'HOUR'|'MINUTE'|'SECOND'|'MILLISECOND',
     *     DefaultFilterControlConfiguration?: DefaultFilterControlConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
