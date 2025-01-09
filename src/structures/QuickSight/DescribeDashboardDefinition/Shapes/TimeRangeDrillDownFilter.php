<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ColumnIdentifier $Column
 * @property \Aws\Api\DateTimeResult $RangeMinimum
 * @property \Aws\Api\DateTimeResult $RangeMaximum
 * @property 'YEAR'|'QUARTER'|'MONTH'|'WEEK'|'DAY'|'HOUR'|'MINUTE'|'SECOND'|'MILLISECOND' $TimeGranularity
 */
class TimeRangeDrillDownFilter extends Shape
{
    /**
     * @param array{
     *     Column: ColumnIdentifier,
     *     RangeMinimum: \Aws\Api\DateTimeResult,
     *     RangeMaximum: \Aws\Api\DateTimeResult,
     *     TimeGranularity: 'YEAR'|'QUARTER'|'MONTH'|'WEEK'|'DAY'|'HOUR'|'MINUTE'|'SECOND'|'MILLISECOND'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
