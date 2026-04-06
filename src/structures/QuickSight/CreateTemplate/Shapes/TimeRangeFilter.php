<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FilterId
 * @property ColumnIdentifier $Column
 * @property bool|null $IncludeMinimum
 * @property bool|null $IncludeMaximum
 * @property TimeRangeFilterValue|null $RangeMinimumValue
 * @property TimeRangeFilterValue|null $RangeMaximumValue
 * @property 'ALL_VALUES'|'NULLS_ONLY'|'NON_NULLS_ONLY' $NullOption
 * @property ExcludePeriodConfiguration|null $ExcludePeriodConfiguration
 * @property 'YEAR'|'QUARTER'|'MONTH'|'WEEK'|'DAY'|'HOUR'|'MINUTE'|'SECOND'|'MILLISECOND'|null $TimeGranularity
 * @property DefaultFilterControlConfiguration|null $DefaultFilterControlConfiguration
 */
class TimeRangeFilter extends Shape
{
    /**
     * @param array{
     *     FilterId: string,
     *     Column: ColumnIdentifier,
     *     IncludeMinimum?: bool|null,
     *     IncludeMaximum?: bool|null,
     *     RangeMinimumValue?: TimeRangeFilterValue|null,
     *     RangeMaximumValue?: TimeRangeFilterValue|null,
     *     NullOption: 'ALL_VALUES'|'NULLS_ONLY'|'NON_NULLS_ONLY',
     *     ExcludePeriodConfiguration?: ExcludePeriodConfiguration|null,
     *     TimeGranularity?: 'YEAR'|'QUARTER'|'MONTH'|'WEEK'|'DAY'|'HOUR'|'MINUTE'|'SECOND'|'MILLISECOND'|null,
     *     DefaultFilterControlConfiguration?: DefaultFilterControlConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
